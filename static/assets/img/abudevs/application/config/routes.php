<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['post/(:any)'] = 'Page/post/$1';
$route['lab'] = 'Page/lab';
$route['contact'] = 'Page/contact';
$route['dashboard'] ='Users/index';
$route['blog'] ='Page/blog';
$route['team'] ='Page/team';
$route['exco'] ='Page/exco';
$route['guest'] ='Page/guest';
$route['login'] ='Page/login';
$route['update-account'] ='Page/update_account';
$route['become-member'] ='Page/register';
$route['membership'] ='Page/membership';
$route['register'] ='Page/exist_members';
$route['default_controller'] = 'Page/index';
$route['404_override'] = 'Page/error';
$route['translate_uri_dashes'] = FALSE;
