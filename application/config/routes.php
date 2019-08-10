<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

// FRONTEND
$route['transaksi'] = 'frontend/data_transaksi';
$route['home'] = 'frontend/home';
$route['kontak_kami'] = 'frontend/kontak_kami';
// Tutup FRONTED

// BACKEND
$route['backend'] = 'backend/login';

// paket_license
$route['backend/v_paket_license'] = 'backend/paket_license/data_tabel_paket_license';
$route['backend/add_paket_license'] = 'backend/paket_license/tambah_paket_license';
$route['backend/edit_paket_license/(:any)'] = 'backend/paket_license/edit_paket_license/$1';
// tutup_paket_license

// jalur_pembayaran
$route['backend/v_jalur_pembayaran'] = 'backend/jalur_pembayaran/data_tabel_jalur_pembayaran';
$route['backend/add_jalur_pembayaran'] = 'backend/jalur_pembayaran/tambah_jalur_pembayaran';
$route['backend/edit_jalur_pembayaran/(:any)'] = 'backend/jalur_pembayaran/edit_jalur_pembayaran/$1';
// tutup_jalur_pembayaran

// bentuk_perhiasan
$route['backend/v_bentuk_perhiasan'] = 'backend/bentuk_perhiasan/data_tabel_bentuk_perhiasan';
$route['backend/add_bentuk_perhiasan'] = 'backend/bentuk_perhiasan/tambah_bentuk_perhiasan';
$route['backend/edit_bentuk_perhiasan/(:any)'] = 'backend/bentuk_perhiasan/edit_bentuk_perhiasan/$1';
// tutup_bentuk_perhiasan

// level_user
$route['backend/v_level_user'] = 'backend/level_user/data_tabel_level_user';
$route['backend/add_level_user'] = 'backend/level_user/tambah_level_user';
$route['backend/edit_level_user/(:any)'] = 'backend/level_user/edit_level_user/$1';
// tutup_level_user

// user_backend
$route['backend/v_user_backend'] = 'backend/user_backend/data_tabel_user_backend';
$route['backend/add_user_backend'] = 'backend/user_backend/tambah_user_backend';
$route['backend/edit_user_backend/(:any)'] = 'backend/user_backend/edit_user_backend/$1';
// tutup_user_backend
// tutup backend

// USER
$route['user'] = 'user/home';
// Tutup USER


/*

| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
