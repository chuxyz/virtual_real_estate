<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['listing'] = 'welcome/listing';
$route['sale/(:num)/(:num)/(:num)'] = 'welcome/sale/$1/$2/$3'; // town_id/prop_id/page 
$route['rent/(:num)/(:num)/(:num)'] = 'welcome/rent/$1/$2/$3'; // town_id/prop_id/page 
$route['property_details/(:num)'] = 'welcome/property_details/$1'; // list_id 
$route['property_type/(:num)/(:num)'] = 'welcome/property_type/$1/$2'; // not_applied 
$route['tag/(:num)'] = 'admin/tag/$1'; 
$route['untag/(:num)'] = 'admin/untag/$1';
$route['search/(:any)/(:num)'] = 'welcome/search/$1/$2'; // search_for/page
$route['about'] = 'welcome/about';
$route['featured'] = 'welcome/featured';
$route['featured/(:num)'] = 'welcome/featured/$1';
$route['featured/(:num)/(:num)'] = 'welcome/featured/$1/$2';
$route['contact'] = 'welcome/contact';
$route['help'] = 'welcome/help';
$route['adminlogin/logout'] = 'admin/logout';
$route['adminlogin'] = 'admin';
$route['ajax/list_town/(:any)'] = 'ajax_ctrl/list_town/$1';//ajax request
$route['ajax/validation/(:any)'] = 'ajax_ctrl/validation/$1';//ajax request
$route['ajax/validation/(:any)/(:any)'] = 'ajax_ctrl/validation/$1/$2';//ajax request

$route['404_override'] = 'welcome/show_404';


/* End of file routes.php */
/* Location: ./application/config/routes.php */