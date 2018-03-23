<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['blog'] = 'blog';
$route['blog/(:any)'] = 'blog/view/$1';

$route['default_controller'] = 'welcome/view';
$route['(:any)'] = 'welcome/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
