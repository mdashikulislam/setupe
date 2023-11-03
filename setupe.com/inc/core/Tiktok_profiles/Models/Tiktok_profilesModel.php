<?php
namespace Core\Tiktok_profiles\Models;
use CodeIgniter\Model;

class Tiktok_profilesModel extends Model
{
	public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
    }
    
	public function block_accounts($path = ""){
        $team_id = get_team("id");
        $accounts = db_fetch("*", TB_ACCOUNTS, "social_network = 'tiktok' AND category = 'profile' AND team_id = '{$team_id}'");
        return [
        	"button" => view( 'Core\Tiktok_profiles\Views\button', [ 'config' => $this->config ] ),
        	"content" => view( 'Core\Tiktok_profiles\Views\content', [ 'config' => $this->config, 'accounts' => $accounts ] )
        ];
    }

    public function block_social_settings($path = ""){
        return [
            "menu" => view( 'Core\Tiktok_profiles\Views\settings\menu', [ 'config' => $this->config ] ),
            "content" => view( 'Core\Tiktok_profiles\Views\settings\content', [ 'config' => $this->config ] )
        ];
    }
}
