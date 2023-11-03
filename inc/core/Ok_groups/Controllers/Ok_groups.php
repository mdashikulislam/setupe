<?php
namespace Core\Ok_groups\Controllers;

class Ok_groups extends \CodeIgniter\Controller
{
    public function __construct(){
        $reflect = new \ReflectionClass(get_called_class());
        $this->module = strtolower( $reflect->getShortName() );
        $this->config = include realpath( __DIR__."/../Config.php" );
        include get_module_dir( __DIR__ , 'Libraries/OkSdk.php');
        $this->client_id = get_option('ok_client_id', '');
        $this->client_secret = get_option('ok_client_secret', '');
        $this->application_key = get_option('ok_application_key', '');
        $this->callback_url = get_module_url();
        
        $this->accessToken = "";
        if(get_session("Ok_AccessToken")){
            $accessToken = get_session("Ok_AccessToken");
            $accessToken = json_decode($accessToken, true);
            $this->accessToken = $accessToken['access_token'];
        }

        if($this->client_id == "" || $this->client_secret == "" || $this->application_key == ""){
            redirect_to( base_url("social_network_settings/index/".$this->config['parent']['id']) ); 
        }

        $this->ok = new \OkSdk(
            $this->client_id,
            $this->application_key,
            $this->client_secret,
            array("VALUABLE_ACCESS","PHOTO_CONTENT","GROUP_CONTENT","VIDEO_CONTENT","GET_EMAIL","LONG_ACCESS_TOKEN"),
            $this->accessToken
        );

        $this->ok->setRedirectUri($this->callback_url);
    }
    
    public function index() {

        try {

            if(!get_session("Ok_AccessToken")){
                $response = $this->ok->authenticate( get("code") );
                if(isset($response['access_token'])){
                    $accessToken = $response['access_token'];
                    set_session(["Ok_AccessToken" => json_encode($response)]);
                }else{
                    $accessToken = false;
                }
            }else{
                $accessToken = get_session("Ok_AccessToken");
                $accessToken = json_decode($accessToken, true);
                $accessToken = $accessToken['access_token'];
            }

            if($accessToken){

                $groups = $this->ok->get_groups();
                $gids = [];
                $result = [];
                if(isset($groups['groups']) && !empty($groups['groups'])){
                    foreach ($groups['groups'] as $key => $group) {
                        $gids[] = $group['groupId'];
                    }
                }

                if(!empty($gids)){

                    $response = $this->ok->get_group_info($gids);

                    foreach ($response as $value) {
                        $value = (object)$value;
                        $avatar = get_avatar($value->name);
                        if(isset($value->picAvatar)){
                            $avatar = $value->picAvatar;
                        }

                        $result[] = (object)[
                            'id' => $value->uid,
                            'name' => $value->name,
                            'avatar' => $avatar,
                            'desc' => $value->name
                        ];
                    }

                    $profiles = [
                        "status" => "success",
                        "config" => $this->config,
                        "result" => $result
                    ];
                }else{
                    $profiles = [
                        "status" => "error",
                        "config" => $this->config,
                        "message" => __('No profile to add')
                    ];
                }

            }else{
                $profiles = [
                    "status" => "error",
                    "config" => $this->config,
                    "message" => __('No profile to add')
                ];
            }
            
        } catch (\Exception $e) {
            $profiles = [
                "status" => "error",
                "config" => $this->config,
                "message" => $e->getMessage()
            ];
        }

        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view('Core\Ok_groups\Views\add', $profiles)
        ];

        return view('Core\Ok_groups\Views\index', $data);
    }

    public function oauth(){
        remove_session(["Ok_AccessToken"]);
        redirect_to($this->ok->getLoginUrl());
    }

    public function save()
    {
        $ids = post('id');
        $team_id = get_team("id");
        $accessToken = get_session("Ok_AccessToken");

        validate('empty', __('Please select a profile to add'), $ids);

        $groups = $this->ok->get_groups();
        $gids = [];
        $result = [];
        if(isset($groups['groups']) && !empty($groups['groups'])){
            foreach ($groups['groups'] as $key => $group) {
                $gids[] = $group['groupId'];
            }
        }

        if(!empty($gids)){

            $response = $this->ok->get_group_info($gids);

            foreach ($response as $value) {
                $value = (object)$value;
                $avatar = get_avatar($value->name);
                if(isset($value->picAvatar)){
                    $avatar = $value->picAvatar;
                }

                if(in_array($value->uid, $ids)){
                    
                    $item = db_get('*', TB_ACCOUNTS, "social_network = 'ok' AND team_id = '{$team_id}' AND pid = '".$value->uid."'");
                    if(!$item){
                        //Check limit number 
                        check_number_account("ok", "group");
                        $avatar = save_img( $avatar, WRITEPATH.'avatar/' );
                        $data = [
                            'ids' => ids(),
                            'module' => $this->module,
                            'social_network' => 'ok',
                            'category' => 'group',
                            'login_type' => 1,
                            'can_post' => 1,
                            'team_id' => $team_id,
                            'pid' => $value->uid,
                            'name' => $value->name,
                            'username' => $value->name,
                            'token' => $accessToken,
                            'avatar' => $avatar,
                            'url' => 'https://ok.ru/group/'.$value->uid,
                            'data' => NULL,
                            'status' => 1,
                            'changed' => time(),
                            'created' => time()
                        ];

                        db_insert(TB_ACCOUNTS, $data);
                    }else{
                        unlink( get_file_path($item->avatar) );
                        $avatar = save_img( $avatar, WRITEPATH.'avatar/' );

                        $data = [
                            'can_post' => 1,
                            'pid' => $value->uid,
                            'name' => $value->name,
                            'username' => $value->name,
                            'token' => $accessToken,
                            'avatar' => $avatar,
                            'url' => 'https://ok.ru/group/'.$value->uid,
                            'status' => 1,
                            'changed' => time(),
                        ];

                        db_update(TB_ACCOUNTS, $data, ['id' => $item->id]);
                    }

                }
            }

            ms([
                "status" => "success",
                "message" => __('Success')
            ]);
        }else{
            ms([
                "status" => "error",
                "message" => __('No profile to add')
            ]);
        }

    }
}