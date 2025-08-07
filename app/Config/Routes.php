<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', 'TestController::index');
/***************************************** this is route *******************************************************************/
$routes->get('/', 'AuthController::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/dashboard', 'AppController::index');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/employeeslist', 'RmsController::employees_list');
$routes->get('/incomp_employeeslist', 'RmsController::incomplete_employees_list');
$routes->get('/new_emp_joining', 'RmsController::new_joining');
// $routes->match(['get', 'post'], '/new_emp_joining', 'RmsController::new_joining');
$routes->match(['GET'], '/new_emp_joining', 'RmsController::new_joining');
$routes->post('/personal_info_save', 'RmsController::personal_info_save');
$routes->post('/identification_details_save', 'RmsController::identification_details_save');
$routes->post('/qualification_details_save', 'RmsController::qualification_details_save');
$routes->post('/address_details_save', 'RmsController::address_details_save');
$routes->post('/family_details_save', 'RmsController::family_details_save');
$routes->post('/accounts_details_save', 'RmsController::accounts_details_save');
$routes->post('/emergency_details_save', 'RmsController::emergency_details_save');
$routes->post('/joining_details_save', 'RmsController::joining_details_save');
$routes->post('/compliance_details_save', 'RmsController::compliance_details_save');
$routes->post('/upload_details_save', 'RmsController::upload_details_save');



