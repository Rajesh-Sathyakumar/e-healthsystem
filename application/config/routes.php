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

$route['default_controller'] = "login";
$route['404_override'] = 'error';


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['requests'] = 'user/requests';
$route['beneficiaries'] = 'user/beneficiaries';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['register']    = "login/register";
$route['addNewHospitalUser'] = "login/addNewHospitalUser";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";
$route['profileupdate'] = "user/profileupdate";
$route['schemesList'] = "user/schemesList";
$route['profilesettings'] = "user/profilesettings";
$route['approve/(:any)/(:any)/(:any)'] = "user/approve";
$route['showRequestProfile/(:num)'] = "user/showRequestProfile/$1";
$route['changeStatus/(:num)/(:any)'] = 
$route['status'] = "login/track";"user/changeStatus";
$route['changeStatusAfterRejection/(:num)'] = "user/changeStatusAfterRejection";
//$route['addHospitalInfo'] = "user/addHospitalInfo";
$route['listBeneficiaries/(:any)/(:any)'] = "user/listBeneficiaries/$1/$1";
$route['addHospitalInfo'] = "user/addHospitalInfo";
$route['empanelrequest'] = "user/empanelrequest";
$route['requestprocess/(:any)'] = "user/requestprocess/$1";
$route['proceedRequest/(:any)'] = "user/proceedRequest/$1";
$route['reports'] = "user/reports";
$route['viewrequest/(:any)'] = "user/viewrequest/$1";
$route['login_page'] = "login/login_page";
$route['status'] = "login/status";
$route['track'] = "login/track";
$route['healthSchemes'] = "HomePage/healthSchemes";
$route['about'] = "login/about";
$route['resetPassword'] = "login/resetPassword";
$route['analytics'] = "user/analytics";
$route['sendNotification'] = "user/sendNotification";
$route['notification'] = "user/notification";




/* End of file routes.php */
/* Location: ./application/config/routes.php */