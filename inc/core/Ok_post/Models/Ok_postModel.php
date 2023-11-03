<?php
namespace Core\Ok_post\Models;
use CodeIgniter\Model;

class Ok_postModel extends Model
{
	public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
        include get_module_dir( __DIR__ , 'Libraries/OkSdk.php');

        $this->client_id = get_option('ok_client_id', '');
        $this->client_secret = get_option('ok_client_secret', '');
        $this->application_key = get_option('ok_application_key', '');
        $this->callback_url = base_url( get_class($this) );
        $this->accessToken = "";
    }

    public function block_can_post(){
        return true;
    }

    public function block_plans(){
        return [
            "tab" => 10,
            "position" => 1100,
            "permission" => true,
            "label" => __("Planning and Scheduling"),
            "items" => [
                [
                    "id" => $this->config['id'],
                    "name" => sprintf("%s scheduling & report", $this->config['name']),
                ]
            ]
        ];
    }

    public function block_frame_posts($path = ""){
        return [
            "position" => 1000,
        	"preview" => view( 'Core\Ok_post\Views\preview', [ 'config' => $this->config ] )
        ];
    }

    public function post_validator($post){
        $errors = array();
        $data = json_decode( $post->data , 1);
        $medias = $data['medias'];

        if($post->social_network == 'ok'){
            switch ($post->type) {
                case 'media':
                    if(empty($data['medias'])){
                        $errors[] = __("Odnoklassniki just support posting as image");
                    }else{
                        if(!is_image($medias[0]))
                        {
                            $errors[] = __("Odnoklassniki just support posting as image");
                        }
                    }
                    break;
            }
        }

        return $errors;
    }

    public function post_handler($post){
        $data = json_decode($post->data, false);
        $medias = $data->medias;
        $shortlink_by = shortlink_by($data);

        try {
            $accessToken = json_decode($post->account->token);

            $this->ok = new \OkSdk(
                $this->client_id,
                $this->application_key,
                $this->client_secret,
                array("VALUABLE_ACCESS","PHOTO_CONTENT","GROUP_CONTENT","VIDEO_CONTENT","GET_EMAIL","LONG_ACCESS_TOKEN")
            );

            $renewToken = $this->ok->renewAccessToken($accessToken->refresh_token);
            $this->accessToken = $renewToken['access_token'];

            $params = [];
            $caption = shortlink( spintax($data->caption), $shortlink_by );
            $link = shortlink( $data->link, $shortlink_by );

            switch ($post->type)
            {
                case 'media':

                    if(count($medias) == 0)
                    {
                        return [
                            "status" => "error",
                            "message" => __("Cannot find the image to upload"),
                            "type" => $post->type
                        ];
                    }

                    if(!is_image($medias[0]))
                    {
                        return [
                            "status" => "error",
                            "message" => __("Cannot find the image to upload"),
                            "type" => $post->type
                        ];
                    }

                    $params = [
                        "application_key"   => $this->application_key,
                        "method"            => "photosV2.getUploadUrl",
                        "count"             => 1,  // количество фото для загрузки
                        "gid"               => $post->account->pid,
                        "format"            => "json"
                    ];

                    // Подпишем запрос
                    $sig = md5( $this->ok->arInStr($params) . md5($this->accessToken.$this->client_secret) );

                    $params['access_token'] = $this->ok->getAccessToken();
                    $params['sig']          = $sig;

                    // Выполним
                    $step1 = json_decode($this->ok->getUrl("https://api.ok.ru/fb.do", "POST", $params), true);

                    // Если ошибка
                    if (isset($step1['error_code'])) {
                        return array(
                            "status" => "error",
                            "message" => $this->ok->get_error($step1['error_code']),
                            "type" => $post->type
                        );
                    }

                    // Идентификатор для загрузки фото
                    $photo_id = $step1['photo_ids'][0];
                    // 2. Закачаем фотку

                    // Предполагается, что картинка располагается в каталоге со скриптом
                    $medias[0] = watermark($medias[0], $post->account->team_id, $post->account->id);
                    
                    $medias[0] == get_file_path($medias[0]);
                    if( stripos( strtolower($medias[0]) , "https://") !== false ||  stripos( strtolower($medias[0]) , "http://") !== false ){
                        $medias[0] = save_img($medias[0], TMPPATH());
                    }
                    
                    $params = array(
                        "pic1" => new \CURLFile(get_file_path($medias[0]))
                    );

                    // Отправляем картинку на сервер, подписывать не нужно
                    $step2 = json_decode( $this->ok->getUrl( $step1['upload_url'], "POST", $params, 30, true), true);

                    // Если ошибка
                    if (isset($step2['error_code'])) {
                        return array(
                            "status" => "error",
                            "message" => $this->ok->get_error($step1['error_code']),
                            "type" => $post->type
                        );
                    }

                    // Токен загруженной фотки
                    $token = $step2['photos'][$photo_id]['token'];

                    $attachment = [
                        "media" => [
                            [
                                "type" => "photo",
                                "list" => [
                                    [
                                        "id" => $token
                                    ]
                                ]
                            ]
                        ]
                    ];

                    if($caption != ""){
                        $attachment = [
                            "media" => [
                                [
                                    "type" => "text",
                                    "text" => $caption
                                ],
                                [
                                    "type" => "photo",
                                    "list" => [
                                        [
                                            "id" => $token
                                        ]
                                    ] 
                                ]
                            ]
                        ];

                    }
                    
                    $attachment = json_encode($attachment);

                    $params = array(
                        "application_key"   =>  $this->application_key,
                        "method"            =>  "mediatopic.post",
                        "gid"               =>  $post->account->pid,
                        "type"              =>  "GROUP_THEME",
                        "attachment"        =>  $attachment,
                        "format"            =>  "json"
                    );

                    // Подпишем
                    $sig = md5( $this->ok->arInStr($params) . md5($this->accessToken.$this->client_secret) );

                    $params['access_token'] = $this->accessToken;
                    $params['sig']          = $sig;

                    $response = json_decode( $this->ok->getUrl("https://api.ok.ru/fb.do", "POST", $params, 30, false, false ), true);
                    unlink_watermark($medias);
                    break;


                case 'link':
                    
                    $attachment = [
                        "media" => [
                            [
                                "type" => "text",
                                "text" => $caption
                            ],
                            [
                                "type" => "link",
                                "url" => $link
                            ]
                        ]
                    ];

                    $attachment = json_encode($attachment);

                    $params = array(
                        "application_key"   =>  $this->application_key,
                        "method"            =>  "mediatopic.post",
                        "gid"               =>  $post->account->pid,
                        "type"              =>  "GROUP_THEME",
                        "attachment"        =>  $attachment,
                        "format"            =>  "json",
                        "text_link_preview" =>  "true"
                    );

                    // Подпишем
                    $sig = md5( $this->ok->arInStr($params) . md5($this->accessToken.$this->client_secret) );

                    $params['access_token'] = $this->accessToken;
                    $params['sig']          = $sig;

                    $response = json_decode( $this->ok->getUrl("https://api.ok.ru/fb.do", "POST", $params, 30, false, false ), true);

                    break;

                case 'text':
                    $attachment = [
                        "media" => [
                            [
                                "type" => "text",
                                "text" => $caption
                            ]
                        ]
                    ];

                    $attachment = json_encode($attachment);

                    $params = [
                        "application_key"   =>  $this->application_key,
                        "method"            =>  "mediatopic.post",
                        "gid"               =>  $post->account->pid,
                        "type"              =>  "GROUP_THEME",
                        "attachment"        =>  $attachment,
                        "format"            =>  "json",
                        "text_link_preview" =>  "true"
                    ];

                    // Подпишем
                    $sig = md5( $this->ok->arInStr($params) . md5($this->accessToken.$this->client_secret) );

                    $params['access_token'] = $this->accessToken;
                    $params['sig']          = $sig;

                    $response = json_decode( $this->ok->getUrl("https://api.ok.ru/fb.do", "POST", $params, 30, false, false ), true);
                    break;
                
            }

            if (isset($response['error_code'])) {
                $error = $this->ok->get_error($response['error_code']);
                return [
                    "status" => "error",
                    "message" => __( $error ),
                    "type" => $post->type
                ];
            }else{
                return [
                    "status" => "success",
                    "message" => __('Success'),
                    "id" => $response,
                    "url" => "https://ok.ru/group/".$post->account->pid."/topic/".$response,
                    "type" => $post->type
                ]; 
            }

            return [
                "status"  => "error",
                "message" => __("Unknow error"),
                "type" => $post->type
            ];
        } catch (\Exception $e) {
            unlink_watermark($medias);
            return [
                "status"  => "error",
                "message" => $e->getMessage(),
                "type" => $post->type
            ];

        }
    }
}
