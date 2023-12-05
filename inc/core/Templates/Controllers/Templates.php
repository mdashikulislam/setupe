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
        $this->db =  \Config\Database::connect();
        helper('Templates_helper');
    }
    
    public function index( ) {

        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];
        $categories = $this->db->table('categories')
            ->select('categories.*,COUNT(templates.id) as total')
            ->join('templates','templates.category_id = categories.id','inner')
            ->orderBy("FIELD(templates.category_id, 'website', 'marketing', 'social', 'custom') ASC, `categories.name` ASC")
            ->groupBy('categories.id')
            ->get()->getResult();
        $data['content'] = view('Core\Templates\Views\list', ['categories'=>$categories]);

        return view('Core\Templates\Views\index', $data);
    }

    public function create()
    {
        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];
        $data['content'] = view('Core\Templates\Views\create');
        return view('Core\Templates\Views\index', $data);
    }

    public function store()
    {
        $currentUser= get_current_user_info();
        $data = [
            'user_id'=>$currentUser->is_admin == 1 ?0 :$currentUser->id,
            'name'=>post('name'),
            'icon'=>post('icon'),
            'description'=>post('description'),
            'prompt'=>post('prompt'),
            'category_id'=>'custom',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ];
        $save =  $this->db->table('templates')->insert($data);
        if ($save){
             redirect_to(get_module_url('/'));
        }else{

        }
    }

    public function view($name)
    {
        if (empty($name)){
            return false;
        }

        $template =  $this->db->table('templates');
        if (is_int($name)){
            $template = $template->where('id',$name);
        }else{
            $template = $template->where('slug',$name);
        }
        $template =  $template->get()->getRow();
        if (empty($template)){
            return false;
        }
        $default = ['article'];
        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];


        if (in_array($name,$default)){
            switch ($name){
                case 'article':
                    $data['content'] = view('Core\Templates\Views\template\article', ['template'=>$template]);
                    break;
                default:
                    $data['content'] = view('Core\Templates\Views\template\article', ['template'=>$template]);
            }
        }else{

        }
        return view('Core\Templates\Views\index', $data);

    }
}