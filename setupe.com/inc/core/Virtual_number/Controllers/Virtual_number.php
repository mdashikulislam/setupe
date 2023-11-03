<?php
namespace Core\Virtual_number\Controllers;

class Virtual_number extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
        
        $this->model = new \Core\Virtual_number\Models\Virtual_contactModel();
        $this->merc_intensekey = get_option('merc_intensekey', '');
        $this->merc_tokenkeys = get_option('merc_tokenkeys', '');

        
        
$db = \Config\Database::connect();
$createTableQuery = "CREATE TABLE IF NOT EXISTS sp_whatsapp_virtual_number (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ids varchar(32),
    team_id int(11),
    phone_id varchar(45),
    phone varchar(15),
    amount text,
    timeofpanding text,
    name varchar(255),
    params text,
    messgaeint int(11),
    status int(11),
    changed int(11),
    created int(11)
)";

// Execute the query
if ($db->query($createTableQuery) === TRUE) {
   
}

// Close the connection
$db->close();
if($this->merc_intensekey=="" && $this->merc_tokenkeys==""){
            redirect_to( base_url("social_network_settings/index/".$this->config['parent']['id']) ); 
        }
    }
    
    public function index( $page = false, $ids = false ) {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
        ];
         $team_id123 =get_team("id");
         $item1236548= db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, ["status"=>0,"team_id" =>$team_id123]);
           if(!empty($item1236548)){
                 $idofsms123=$item1236548->phone_id;
                          $curl232536 = curl_init();
    curl_setopt_array($curl232536, array(
        CURLOPT_URL => "https://ocmws.com/apiv1/create_virtual_number?instance_id=".$this->merc_intensekey."&access_token=".$this->merc_tokenkeys."&type=get_fullsms&id_for_status=$idofsms123",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_TIMEOUT=>9000,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
        ]
    ));
    $response123456=curl_exec($curl232536);
   // $response123="success";
    curl_close($curl232536);
      if(!empty($response123456)){
          $fulldataof123=json_decode($response123456);
          if($fulldataof123->code=="1"||$fulldataof123->code=="2"||$fulldataof123->code=="0"){
             db_update(
                TB_WHATSAPP_PHONE_VIRTUAL, 
                [
                "params"=>$fulldataof123->message,
                 "status" =>$fulldataof123->code,
                 "messgaeint"=>$fulldataof123->code
                ], 
                array("phone_id"=>$idofsms123,"team_id"=>$team_id123)
            );
      }
                }
        
                }
                
                      $item1225= db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, ["status"=>1,"messgaeint"=>1,"team_id"=>$team_id123]);
           if(!empty($item1225)){
                $idof_nayay=$item1225->phone_id;
                  $givenTimestamp = $item1225->created; 
$currentTimestamp = time();

// Define a time difference (e.g., 15 minutes in seconds)
$timeDifference=14* 60; // 15 minutes * 60 seconds per minute

// Calculate the expiration timestamp by adding the time difference to the given timestamp
$expirationTimestamp = $givenTimestamp + $timeDifference;
if ($expirationTimestamp < $currentTimestamp){
  db_update(
                TB_WHATSAPP_PHONE_VIRTUAL, 
                [
                 "messgaeint" =>2
                ], 
                array("phone_id"=>$idof_nayay,"team_id"=>$team_id123)
            );
}else{
   $curl_newk = curl_init();
    curl_setopt_array($curl_newk, array(
        CURLOPT_URL => "https://ocmws.com/apiv1/create_virtual_number?instance_id=".$this->merc_intensekey."&access_token=".$this->merc_tokenkeys."&type=get_fullsms&id_for_status=$idof_nayay",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_TIMEOUT=>9000,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
        ]
    ));
    $response_naysn=curl_exec($curl_newk);
   // $response123="success";
    curl_close($curl_newk);
      if(!empty($response_naysn)){
          $fulldat_nsn=json_decode($response_naysn);
          if($fulldat_nsn->code=="1"){
        
   db_update(
       
       TB_WHATSAPP_PHONE_VIRTUAL, 
                [
                "params"=>$fulldat_nsn->message,
                 "messgaeint" =>1
                ], 
                array("phone_id"=>$idof_nayay,"team_id"=>$team_id123)
            );}
     }else{
        db_update(
                TB_WHATSAPP_PHONE_VIRTUAL, 
                [
                 "messgaeint" =>2
                ], 
                array("phone_id"=>$idof_nayay,"team_id"=>$team_id123)
            );  
          
          
      } }
         }
                    
 switch ($page){
            case 'phone_numbers':
                $team_id = get_team("id");
                $item = false;
                if( $ids ){
                    $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, ["ids"=>$ids,"team_id" =>$team_id]);
                 }
                if(empty($item)) redirect_to(get_module_url() );
                $total = $this->model->get_list_phone_numbers(false, $item->id);
                
                
               

                $datatable = [
                    "total_items" => $total,
                    "per_page" => 50,
                    "current_page" => 1,

                ];

                $data_content = [
                    'contact' =>$item,
                    'total' => $total,
                    'datatable'  => $datatable,
                    'config'  => $this->config,
                ];

                $data['content'] = view('Core\Virtual_number\Views\phone_numbers', $data_content );
                break;

            case 'update':
                $team_id = get_team("id");
                $item = false;
                if( $ids ){
                    $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, [ "ids" => $ids, "team_id" => $team_id ]);
                }

                $data['content'] = view('Core\Virtual_number\Views\update', ["result" => $item, "config" => $this->config]);
                break;

            default:
                $total = $this->model->get_list(false);

                $datatable = [
                    "total_items" => $total,
                    "per_page" => 30,
                    "current_page" => 1,
                ];

                $data_content = [
                    'total' => $total,
                    'datatable'  => $datatable,
                    'config'  => $this->config,
                ];

                $data['content'] = view('Core\Virtual_number\Views\content', $data_content );
                break;
        }

        return view('Core\Whatsapp\Views\index', $data);
    }

    public function popup_import_contact($ids = false){
        $team_id = get_team("id");
        $item = false;
        if( $ids ){
            $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, [ "ids" => $ids, "team_id" => $team_id ]);
        }

        $data = [
            'config'  => $this->config,
            'result' => $item
        ];
        return view('Core\Virtual_number\Views\popup_import_contact', $data);
    }

    public function ajax_list(){
        $total_items = $this->model->get_list(false);
        $result = $this->model->get_list(true);
        $data = [
            "result"=>$result,
            "config" => $this->config
        ];
        ms( [
            "total_items" => $total_items,
            "data" => view('Core\Virtual_number\Views\ajax_list', $data)
        ] );
    }

    public function ajax_list_phone_numbers($ids = ""){
        $total_items = $this->model->get_list_phone_numbers(false, $ids);
        $result = $this->model->get_list_phone_numbers(true, $ids);
        $data = [
            "result" => $result,
            "config" => $this->config
        ];
        ms( [
            "total_items" => $total_items,
            "data" => view('Core\Virtual_number\Views\ajax_list_phone_numbers', $data)
        ] );
    }

    public function save($ids = "")
    {
        $status = post('country');
        $name = post('name');
        $team_id = get_team("id");

        $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL,"ids='{$ids}'");
        if(!$item){
            $total_contact_group=db_get("count(id) as count", TB_WHATSAPP_PHONE_VIRTUAL, ["team_id" => $team_id]);
            $max_contact_group = (int)permission('virtual_number_qty');
            if($max_contact_group <= $total_contact_group->count){
                ms([
                    "status" => "error",
                    "message" => sprintf( __( 'You can only create a maximum of %s virtual Number' ), $max_contact_group )
                ]);
            }

            $itemjdfh = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, "name = '{$name}'");
            if(!empty($itemjdfh)){
            ms([
                    "status" => "error",
                    "message" => sprintf( __( 'this name already exist' ) )
                ]);
            }
            
       $vnget=str_replace('+', '',$status);
        $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://ocmws.com/apiv1/create_virtual_number?instance_id=".$this->merc_intensekey."&access_token=".$this->merc_tokenkeys."&type=GET_NUMBER&contery_code=$vnget",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_TIMEOUT=>1000,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
        ]
    ));
     $response123654= curl_exec($curl);
    
    
    $response=json_decode($response123654);
    curl_close($curl);
       
        if(!empty($response123654)){
            
            if($response->status=="error"){
               ms([
                    "status" => "error",
                    "message" =>$response->message
                ]);
            }
        
$pattern = "/^" . preg_quote($vnget, '/') . "/"; 

$resulthdfjdfh = preg_replace($pattern, "", $response->vitual_number, 1);
    
             $data1[]=[
                        "ids" =>ids(),
                        "team_id" =>$team_id,
                        "phone_id"=>$response->id_for_status,
                        "phone"=>$resulthdfjdfh,
                        "amount"=>$response->sum.$response->currency,
                        "timeofpanding"=>$vnget,
                        "name" =>$name,
                        "messgaeint" =>0,
                         "status" =>0,
                        "changed" => time(),
                        "created" => time(),
                    ];
            
            
            db_insert(TB_WHATSAPP_PHONE_VIRTUAL, $data1);
        
             ms([
            "status" => "success",
            "message" => __('Success')
        ]);
            
            
        }else{
            ms([
                    "status" => "error",
                    "message" => sprintf( __( 'Please Wait Server Error' ) )
                ]);
        }
        
    
        }else{
            
             ms([
                    "status" => "error",
                    "message" => sprintf( __( 'You Are Not Permitted ' ) )
                ]);
        }

       

    }

    public function delete($ids = ""){
        $team_id = get_team("id");
        if( empty($ids) ){
            ms([
                "status" => "error",
                "message" => __('Please select an item to delete')
            ]);
        }

        if( is_array($ids) ){
            foreach ($ids as $id) {
                $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, ["ids" => $id, "team_id" => $team_id,"status" =>2]);
                if(!empty($item)){
                    db_delete(TB_WHATSAPP_PHONE_VIRTUAL, ['ids' => $id, "team_id" => $team_id]);
                    
                }
            }
        }
        elseif( is_string($ids) )
        {
            $item = db_get("*", TB_WHATSAPP_PHONE_VIRTUAL, ["ids" => $ids, "team_id" => $team_id,"status" =>2]);
            if(!empty($item)){
                db_delete(TB_WHATSAPP_PHONE_VIRTUAL, ['ids' => $ids, "team_id" => $team_id]);
            }
        }

        ms([
            "status" => "success",
            "message" => __('Success')
        ]);
    }

    
}