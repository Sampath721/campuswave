<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');




//Main Routes
$routes->add('/', 'HomeController::index',['namespace' => 'Modules\Common\Controllers']);
$routes->add('/teacher_dashboard', 'HomeController::index', ['namespace' => 'Modules\Teacher\Controllers']);

$routes->add('/student_dashboard', 'HomeController::index',['namespace' => 'Modules\Student\Controllers']);
$routes->add('/add_student', 'HomeController::add_student',['namespace' => 'Modules\Student\Controllers']);