<?php

namespace Modules\Student\Controllers;


class HomeController extends BaseController{

    function __construct(){

    }

    public function index(){
        echo "Hello, students dashboard here";
        exit;
    }

    public function add_student(){
        echo view('Modules\Student\Views\add-student');
    }
}



?>