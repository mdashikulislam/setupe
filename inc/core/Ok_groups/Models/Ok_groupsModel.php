<?php
namespace Core\Ok_groups\Models;
use CodeIgniter\Model;

class Ok_groupsModel extends Model
{
	public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
    }
    
	public function block_accounts($path = ""){
        $team_id = get_team("id");
        $accounts = db_fetch("*", TB_ACCOUNTS, "social_network = 'ok' AND category = 'group' AND team_id = '{$team_id}'");
        return [
        	"button" => view( 'Core\Ok_groups\Views\button', [ 'config' => $this->config ] ),
        	"content" => view( 'Core\Ok_groups\Views\content', [ 'config' => $this->config, 'accounts' => $accounts ] )
        ];
    }

    public function block_social_settings($path = ""){
        return [
            "menu" => view( 'Core\Ok_groups\Views\settings\menu', [ 'config' => $this->config ] ),
            "content" => view( 'Core\Ok_groups\Views\settings\content', [ 'config' => $this->config ] )
        ];
    }
}
