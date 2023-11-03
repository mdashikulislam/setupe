<?php
namespace Core\Ok_post\Controllers;

class Ok_post extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = parse_config( include realpath( __DIR__."/../Config.php" ) );
    }
}