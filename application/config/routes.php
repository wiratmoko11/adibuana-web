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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['detil-berita-dan-pengumuman/(:any)/(:any)'] = 'main/detilberitadanpengumuman/$1/$2';
$route['sekilas/(:any)/(:any)'] = 'main/sekilas/$1/$2';
$route['fakultas-detil/(:any)/(:any)/(:any)/(:any)'] = 'main/detilfakultas/$1/$2/$3/$4';
$route['berita-dan-pengumuman/(:any)/(:any)'] = 'main/beritadanpengumuman/$1/$2';
$route['karier'] = 'main/karier';
$route['kegiatan'] = 'main/kegiatan';
$route['event-detail/(:any)/(:any)'] = 'main/detilkegiatan/$1/$2';
$route['login'] = 'main/login';
$route['kkn'] = 'main/kkn';
$route['ganti-bahasa/(:any)'] = 'main/ganti_bahasa/$1';
$route['satuan-kerja/(:any)/(:any)'] = 'main/satuankerja/$1/$2';
$route['sarana'] = 'main/sarana';
$route['fakultas-dan-program-studi/(:any)'] = 'main/fakultas_prodi/$1';
$route['area-fakultas/(:any)'] = 'main/area_fakultas/$1'; 
$route['galeri'] = 'main/galeri';
$route['detail-galeri/(:any)/(:any)'] = 'main/detailgaleri/$1/$2';
$route['pencarian'] = 'main/pencarian';
$route['blog/(:any)'] = 'main/blog/$1';
$route['karir-detail/(:any)/(:any)'] = 'main/karir_detail/$1/$2';