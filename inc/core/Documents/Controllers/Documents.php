<?php
namespace Core\Documents\Controllers;
class Documents extends \CodeIgniter\Controller
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
        $documents = $this->db->table('documents')
            ->select('documents.*,templates.name as template_name,templates.category_id as category_id')
            ->join('templates', 'documents.template_id = templates.id', 'left')
            ->where('documents.user_id', $userId);

        $documents = $documents->get()->getResult();

        $data['content'] = view('Core\Documents\Views\list', ['documents'=>$documents]);

        return view('Core\Documents\Views\index', $data);
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
            redirect_to(get_module_url('/'));
        }
        $default = ['article'];
        $data = [
            "title" => $this->config['menu']['sub_menu']['name'],
            "desc" => $this->config['desc'],
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
             $this->db->table('templates')
                ->where('id','=',$template->id)
                ->set('views','views + 1',false)
                ->update();
             $prompt = str_replace(
                 [':language', ':title', ':subheadings', ':keywords', ':length'],
                 [getLanguageNameByCode($_POST['language']),$_POST['title'],$_POST['subheadings'],$_POST['keywords'],$_POST['length']],
                 $template->prompt);
            $documents = documentsStore($_POST,$prompt);
            $tempData = [
                'view'=>$name,
                'template'=>$template,
                'documents'=>$documents,
                'name'=>$_POST['name'],
                'title'=>$_POST['title'],
                'keywords'=>$_POST['keywords'],
                'subheadings'=>$_POST['subheadings'],
                'creativity'=>$_POST['creativity'],
                'variations'=>$_POST['variations'],
                'language'=>$_POST['language'],
                'length'=>$_POST['length']
            ];
            if (in_array($name,$default)){
                $data['content'] = view('Core\Templates\Views\template'.DIRECTORY_SEPARATOR .$name, $tempData);
            }else{
                $data['content'] = '';
            }
        }else{
            $tempData = [
                'view'=>$name,
                'template'=>$template,
                'documents'=>'',
                'name'=>'',
                'title'=>'',
                'keywords'=>'',
                'subheadings'=>'',
                'creativity'=>'',
                'variations'=>'',
                'language'=>'',
                'length'=>''
            ];
            if (in_array($name,$default)){
                $data['content'] = view('Core\Templates\Views\template'.DIRECTORY_SEPARATOR .$name, $tempData);
            }else{
                $data['content'] = '';
            }
        }

        return view('Core\Templates\Views\index', $data);

    }


}