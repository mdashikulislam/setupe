<?php
namespace Core\Chats\Controllers;
class Chats extends \CodeIgniter\Controller
{
    private $db;
    private $templateTable = 'templates';
    private $categoryTable = 'categories';
    public function __construct(){

        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
        $this->class_name = get_class_name($this);
        $this->db =  \Config\Database::connect();
        helper('Templates_helper');

    }
    
    public function index( ) {
        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];

        $userId = get_user('id');
        $chats = $this->db->table('chats')
            ->select('*')
            ->where('chats.user_id', $userId)
            ->orderBy('chats.created_at','DESC');
        $chats = $chats->get()->getResult();
        $data['content'] = view('Core\Chats\Views\list', ['chats'=>$chats]);

        return view('Core\Chats\Views\index', $data);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function view($id)
    {
        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];
        $user = get_current_user_info();
        $chat = $this->db->table('chats')->where('id',$id)->get()->getRow();
        $messages = $this->db->table('messages')->where('chat_id',$chat->id)->orderBy('id','ASC')->get()->getResult();
        $data['content'] = view('Core\Chats\Views\messages', ['chat'=>$chat,'messages'=>$messages,'user'=>$user]);
        return view('Core\Chats\Views\index', $data);
    }
}