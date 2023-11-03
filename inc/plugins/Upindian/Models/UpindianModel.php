<?php
namespace Plugins\Upindian\Models;
use CodeIgniter\Model;

class UpindianModel extends Model
{
	public function __construct(){
        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
    }

    public function payment_configuration(){
        return [
            'position' => 2000,
            'html' => view( 'Plugins\Upindian\Views\payment_configuration', [ 'config' => $this->config ] )
        ];
    }

    public function payment_button(){
        $data = [
            "title" => __("Indian UPI"),
            "desc" => __("One-time payment"),
            "logo" => get_module_path(__DIR__, "Assets/img/1493.jpeg"),
            "url" => base_url( $this->config['id']. "/index/" . uri("segment", 3) )
        ];

        return [
            'position' => 10000,
            'html' => view( 'Plugins\Upindian\Views\button', $data )
        ];
    }
}
