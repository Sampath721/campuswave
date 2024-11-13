<?php

namespace Modules\Common\Controllers;


class HomeController extends BaseController{

    function __construct(){

    }

    public function index(){
        echo "Hello Campus Wave";
        exit;
    }
}



?>