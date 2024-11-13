<?php
namespace Modules\Teacher\Controllers;

class HomeController extends BaseController{

    function __construct(){

    }

    public function index(){
        echo "Hello, Teacher dashboard here";
        exit;
    }
}



?>