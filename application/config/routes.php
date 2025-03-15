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
$route['default_controller'] = 'Home';
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;

$route['About-Us'] = 'home/about';
$route['Contact-Us'] = 'home/contact';
$route['Founder-Message'] = 'home/founder_message';
$route['Who-We-Are'] = 'home/who_we_are';
$route['Products/(:any)/(:any)'] = 'home/products/$1/$2';
$route['Products-Details/(:any)/(:num)'] = 'home/products_details/$1/$2';
$route['Gallery'] = 'home/gallery';
$route['Partners'] = 'home/partners';
$route['Clients'] = 'home/clients';
$route['Testimonials'] = 'home/testimonials';
$route['Training-Center'] = 'home/training_center';
$route['Our-Products'] = 'home/products_explain';

$route['Apparel'] = 'home/apparel';
$route['Brass'] = 'home/brass';
$route['Spices-and-Tea'] = 'home/spices_and_tea';
$route['Other'] = 'home/other';
$route['Our_Story'] = 'home/Our_Story';

$route['Privacy-Policy'] = 'home/privacy_policy';
$route['Terms-Conditions'] = 'home/terms_condition';
$route['Delivery-Information'] = 'home/delivery_information';
$route['FAQ'] = 'home/faq';
$route['Contact-Us'] = 'home/contact_us';
$route['Product-Search'] = 'home/searchdata';
$route['Register'] = 'myaccount/register';
$route['Login'] = 'myaccount/login';
$route['Edit-Account'] = 'myaccount/edit_account';
$route['My-Orders'] = 'myaccount/my_orders';
$route['Checkout'] = 'myaccount/checkout';
$route['Sessions'] = 'myaccount/sessions';

$route['How-to-Enroll'] = 'home/how_to_entroll';
$route['Our-Message'] = 'home/chairman';
$route['Mission-Vision'] = 'home/mission_vision';
$route['Courses'] = 'home/courses';




$route['Category/(:any)/(:num)'] = 'home/category/$2';
// Products-Details
$route['News-and-Media'] = 'home/hardware';
$route['News-Details/(:any)/(:num)'] = 'home/hardware_details/$2';

$route['Pantry-Cupboards'] = 'home/pantry';
$route['Pantry-Details/(:any)/(:num)'] = 'home/pantry_details/$2';

$route['Polymer-Boards'] = 'home/polymer';
$route['Polymer-Details/(:any)/(:num)'] = 'home/polymer_details/$2';

$route['Project'] = 'home/project';
$route['Project-Details/(:any)/(:num)'] = 'home/project_details/$2';

$route['Quartz-Stones'] = 'home/quartz';
$route['Quartz-Details/(:any)/(:num)'] = 'home/quartz_details/$2';
// ADMIN

/* Brand */
$route['Create-Brand'] = 'admin/brand/create';
$route['Manage-Brand'] = 'admin/brand/index';
$route['Rearrange-Brand'] = 'admin/brand/rearrange';
$route['Edit-Brand/(:num)'] = 'admin/brand/edit/$1';
$route['Delete-Brand/(:num)'] = 'admin/brand/delete/$1';

/* Banners */
$route['Create-Banners'] = 'admin/banners/create';
$route['Manage-Banners'] = 'admin/banners/index';
$route['Rearrange-Banners'] = 'admin/banners/rearrange';
$route['Edit-Banners/(:num)'] = 'admin/banners/edit/$1';
$route['Delete-Banners/(:num)'] = 'admin/banners/delete/$1';

// Banner 
$route['Manage-Banner'] = 'admin/banners/index';


$route['My-Account'] = 'myaccount/index';
$route['Track-Order'] = 'myaccount/track_order';
$route['Get-Quotation'] = 'myaccount/get_quotation';
$route['Manage-Banner'] = 'admin/banners/index';

$route['Cart'] = 'myaccount/cart_page';


// Product - Rearrgange 
$route['admin/Products/Re-Arrange'] = 'admin/products/re_arrange';

/*Main Category */
$route['Create-Main-Category'] = 'admin/maincategory/create';
$route['Manage-Main-Category'] = 'admin/maincategory/index';
$route['Rearrange-Main-Category'] = 'admin/maincategory/rearrange';
$route['Edit-Main-Category/(:num)'] = 'admin/maincategory/edit/$1';
$route['Delete-Main-Category/(:num)'] = 'admin/maincategory/delete/$1';
$route['Category-Main-Re-Arrange'] = 'admin/maincategory/re_arrange';


/* Category */
$route['Create-Category'] = 'admin/category/create';
$route['Manage-Category'] = 'admin/category/index';
$route['Rearrange-Category'] = 'admin/category/rearrange';
$route['Edit-Category/(:num)'] = 'admin/category/edit/$1';
$route['Delete-Category/(:num)'] = 'admin/category/delete/$1';
$route['Category-Re-Arrange'] = 'admin/category/re_arrange';

/* Hardware */
$route['Create-Hardware'] = 'admin/hardware/create';
$route['Manage-Hardware'] = 'admin/hardware/index';
$route['Rearrange-Hardware'] = 'admin/hardware/rearrange';
$route['Edit-Hardware/(:num)'] = 'admin/hardware/edit/$1';
$route['Delete-Hardware/(:num)'] = 'admin/hardware/delete/$1';
$route['Upload-Hardware-Documents/(:num)'] = 'admin/hardware/documents_upload/$1';
$route['Delete-Hardware-Document/(:num)/(:num)'] = 'admin/hardware/deletedoc/$1/$2';

/* Pantry */
$route['Create-Pantry'] = 'admin/pantry/create';
$route['Manage-Pantry'] = 'admin/pantry/index';
$route['Rearrange-Pantry'] = 'admin/pantry/rearrange';
$route['Edit-Pantry/(:num)'] = 'admin/pantry/edit/$1';
$route['Delete-Pantry/(:num)'] = 'admin/pantry/delete/$1';
$route['Upload-Pantry-Documents/(:num)'] = 'admin/pantry/documents_upload/$1';
$route['Delete-Pantry-Document/(:num)/(:num)'] = 'admin/pantry/deletedoc/$1/$2';

/* Polymer */
$route['Create-Polymer'] = 'admin/polymer/create';
$route['Manage-Polymer'] = 'admin/polymer/index';
$route['Rearrange-Polymer'] = 'admin/polymer/rearrange';
$route['Edit-Polymer/(:num)'] = 'admin/polymer/edit/$1';
$route['Delete-Polymer/(:num)'] = 'admin/polymer/delete/$1';
$route['Upload-Polymer-Documents/(:num)'] = 'admin/polymer/documents_upload/$1';
$route['Delete-Polymer-Document/(:num)/(:num)'] = 'admin/polymer/deletedoc/$1/$2';

/* Project */
$route['Create-Project'] = 'admin/project/create';
$route['Manage-Project'] = 'admin/project/index';
$route['Rearrange-Project'] = 'admin/project/rearrange';
$route['Edit-Project/(:num)'] = 'admin/project/edit/$1';
$route['Delete-Project/(:num)'] = 'admin/project/delete/$1';
$route['Upload-Project-Documents/(:num)'] = 'admin/project/documents_upload/$1';
$route['Delete-Project-Document/(:num)/(:num)'] = 'admin/project/deletedoc/$1/$2';

/* Quartz */
$route['Create-Quartz'] = 'admin/quartz/create';
$route['Manage-Quartz'] = 'admin/quartz/index';
$route['Rearrange-Quartz'] = 'admin/quartz/rearrange';
$route['Edit-Quartz/(:num)'] = 'admin/quartz/edit/$1';
$route['Delete-Quartz/(:num)'] = 'admin/quartz/delete/$1';
$route['Upload-Quartz-Documents/(:num)'] = 'admin/quartz/documents_upload/$1';
$route['Delete-Quartz-Document/(:num)/(:num)'] = 'admin/quartz/deletedoc/$1/$2';

$route['admin/Create-Products'] = 'admin/products/create';
$route['admin/Manage-Products'] = 'admin/products/index';
$route['admin/Edit-Product/(:any)'] = 'admin/products/edit/$1';
$route['admin/Delete-Product/(:any)'] = 'admin/products/delete/$1';

// project 
$route['admin/Create-Project'] = 'admin/project/create';
$route['admin/Manage-Project'] = 'admin/project/index';
$route['admin/Edit-Project/(:any)'] = 'admin/project/edit/$1';
$route['admin/Delete-Project/(:any)'] = 'admin/project/delete/$1';

// project end 

$route['admin/Create-Testemonial'] = 'admin/testemonials/create';
$route['admin/Manage-Testemonial'] = 'admin/testemonials/index';
$route['admin/Edit-Testemonial/(:any)'] = 'admin/testemonials/edit/$1';
$route['admin/Delete-Testemonial/(:any)'] = 'admin/testemonials/delete/$1';
$route['admin/Testemonial/Re-Arrange'] = 'admin/testemonials/re_arrange';

$route['admin/Create-Gallery'] = 'admin/gallery/create';
$route['admin/Manage-Gallery'] = 'admin/gallery/index';
$route['admin/Edit-Gallery/(:any)'] = 'admin/gallery/edit/$1';
$route['admin/Delete-Gallery/(:any)'] = 'admin/gallery/delete/$1';
$route['admin/Gallery/Re-Arrange'] = 'admin/gallery/rearrange';

$route['admin/Create-Partner'] = 'admin/partners/create';
$route['admin/Manage-Partners'] = 'admin/partners/index';
$route['admin/Edit-Partners/(:any)'] = 'admin/partners/edit/$1';
$route['admin/Delete-Partners/(:any)'] = 'admin/partners/delete/$1';
$route['admin/Partners/Re-Arrange'] = 'admin/partners/rearrange';


$route['admin/Page-Manage'] = 'admin/page/index';
$route['admin/Edit-page/(:any)'] = 'admin/page/edit/$1';