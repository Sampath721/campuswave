<?php

namespace Modules\Student\Controllers;


class HomeController extends BaseController{

    function __construct(){

    }

    public function index(){
        echo "Hello, Student dashboard here";
        exit;
    }
}



?>