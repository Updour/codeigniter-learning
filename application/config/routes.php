<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'belajar';
$route['perkenalan'] = 'belajar/perkenalan1';
$route['uri/(:any)'] = 'belajar/uri';
$route['template'] = 'belajar/template';
$route['halaman/(:any)'] = 'belajar/halaman';
$route['input/(:any)'] = 'belajar/input';
$route['insert/(:any)'] = 'belajar/insert';
$route['hapus/(:any)/(:any)'] = 'belajar/hapus';
$route['ubah/(:any)/(:any)'] = 'belajar/ubah';
$route['update/(:any)/(:any)'] = 'belajar/update';

$route['admin'] = 'admin';
$route['admin/input/(:any)'] = 'admin/input/$1';
$route['admin/insert/(:any)'] = 'admin/insert/$1';
$route['admin/hapus/(:any)/(:any)'] = 'admin/hapus/$1/$2';
$route['admin/ubah/(:any)/(:any)'] = 'admin/ubah/$1';
$route['admin/update/(:any)/(:any)'] = 'admin/update/$1/$2';
$route['admin/daftar/(:any)'] = 'admin/daftar/$1';

$route['login'] = 'auth';
$route['cek_login'] = 'auth/cek_login';
$route['logout'] = 'auth/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
