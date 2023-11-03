<?php

namespace Core\Extended_Modules\Controllers;

class Extended_Modules extends \CodeIgniter\Controller
{
    public function __construct()
    {
        $this->config = parse_config(include realpath(__DIR__ . "/../Config.php"));
        $this->model = new \Core\Extended_Modules\Models\Extended_ModulesModel();
    }

    public function index()
    {

        // if (!permission("whatsapp_api")) {
        //     redirect_to(base_url());
        // }

        // $team_id = get_team("id");
        // $accounts = db_fetch("*", TB_ACCOUNTS, ["social_network" => "whatsapp", "category" => "profile", "login_type" => 2, "team_id" => $team_id], "created", "ASC");
        // permission_accounts($accounts);

        // $data = [
        //     "title" => $this->config['name'],
        //     "desc" => $this->config['desc'],
        //     "content" => view('Core\Whatsapp_link_generator\Views\content', ["config" => $this->config, "accounts" => $accounts])
        // ];

        return view('Core\Extended_Modules\Views\content', []);
    }
}
