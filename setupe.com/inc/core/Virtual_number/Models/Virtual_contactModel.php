<?php
namespace Core\Virtual_number\Models;
use CodeIgniter\Model;

class Virtual_contactModel extends Model
{
	public function __construct(){
        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
    }
     public function block_social_settings($path = ""){
        return [
            "menu" => view( 'Core\Virtual_number\Views\settings\menu', [ 'config' => $this->config ] ),
            "content" => view( 'Core\Virtual_number\Views\settings\content', [ 'config' => $this->config ] )
        ];
    }
    public function block_whatsapp(){
        $data = [
            "config" => $this->config
        ];

        return array(
            "position" => 4000,
            "config" => $this->config
        );
    }

    public function get_list( $return_data = true )
    {
        $team_id = get_team("id");
        $current_page = (int)(post("current_page") - 1);
        $per_page = post("per_page");
        $total_items = post("total_items");
        $keyword = post("keyword");

        $db = \Config\Database::connect();
        $builder = $db->table(TB_WHATSAPP_PHONE_VIRTUAL);
        $builder->select('*');
        $builder->where("(team_id='{$team_id}')");

        if( $keyword ){
            $builder->where("( name LIKE '%{$keyword}%' )") ;
        }
        
        if( !$return_data )
        {
            $result =  $builder->countAllResults();
        }
        else
        {
            $builder->limit($per_page, $per_page*$current_page);
            $builder->orderBy("created", "DESC");
            $query = $builder->get();
            $result = $query->getResult();
            $query->freeResult();
             if(!empty($result)){
                
                return $result;
            }
        }

        
        return $result;
    }

    public function get_list_phone_numbers( $return_data = true, $pid = false )
    {
        $team_id = get_team("id");
        $current_page = (int)(post("current_page") - 1);
        $per_page = post("per_page");
        $total_items = post("total_items");
        $keyword = post("keyword");

        $db = \Config\Database::connect();
        $builder = $db->table(TB_WHATSAPP_PHONE_VIRTUAL);
        $builder->select('*');
        $builder->where("(id = '{$pid}' AND team_id = '{$team_id}' )");

        if( $keyword ){
            $builder->where(("phone LIKE '%{$keyword}%'")) ;
        }
        
        if( !$return_data )
        {
            $result =  $builder->countAllResults();
        }
        else
        {
            $builder->limit($per_page, $per_page*$current_page);
            $builder->orderBy("id", "DESC");
            $query = $builder->get();
            $result = $query->getResult();
            $query->freeResult();
        }

        
        return $result;
    }
}
