<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user'] = 'user';
$route['user/create'] = 'user/create';
 
$route['user/edit/(:any)'] = 'user/edit/$1';
 
$route['user/view/(:any)'] = 'user/view/$1';
$route['user/(:any)'] = 'user/view/$1';

