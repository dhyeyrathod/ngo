<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'index';
$route['404_override'] = 'index/page_not_found';


$route['translate_uri_dashes'] = FALSE;


// frontend route 

$route['home'] = 'Frontend/home';
$route['about_us'] = 'Frontend/about_us';
$route['ask_question'] = 'Frontend/ask_question';

$route['authentication'] = 'Frontend/authentication';
$route['login_process'] = 'Frontend/authentication/login_process';
$route['signup_process'] = 'Frontend/authentication/signup_process';
$route['logout'] = 'Frontend/authentication/logout';


$route['blog'] = 'Frontend/blog/index';
$route['blog/(:any)'] = 'Frontend/blog/tagCloud';
$route['blog_detail/(:any)/(:any)'] = 'Frontend/blog/details';
$route['comments_process'] = 'Frontend/blog/comments_process';


$route['question_process'] = 'Frontend/ask_question/question_process';
$route['category/(:num)'] = 'Frontend/ask_question/category';
$route['answer/(:num)'] = 'Frontend/ask_question/answer';

$route['donate'] = 'Frontend/cms/donate';
$route['media'] = 'Frontend/cms/media';
$route['programs'] = 'Frontend/cms/programs';
$route['contact'] = 'Frontend/cms/contact_us';

$route['join_us'] = 'Frontend/join_us/index';
$route['joinus_process'] = 'Frontend/join_us/joinus_process';
$route['get_city'] = 'Frontend/join_us/getCities';

$route['gallery'] = 'Frontend/gallery/index';


// admin route


$route['admin_section'] = 'Admin/account/login';


