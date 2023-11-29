<?php
namespace Core\Templates\Controllers;

class Templates extends \CodeIgniter\Controller
{
    private $db;
    private $templateTable = 'templates';
    private $categoryTable = 'categories';
    public function __construct(){
        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
        $this->class_name = get_class_name($this);
        $this->model = new \Core\Templates\Models\TemplatesModel();

    }
    
    public function index( ) {

        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];
        $data['content'] = null;

        $db = \Config\Database::connect();
        $templates = $db->table('templates')
            ->select('templates.*,categories.name as category_name')
            ->join('categories','categories.id = templates.category_id','inner')
            ->orderBy("FIELD(category_id, 'website', 'marketing', 'social', 'custom') ASC, `name` ASC")
            ->get()->getResult();;


        $data['content'] = view('Core\Templates\Views\list', ['templates'=>$templates]);

        return view('Core\Templates\Views\index', $data);
    }

    public function create()
    {
        die('create');
    }

}