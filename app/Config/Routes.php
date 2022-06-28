<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('', ['filter' => 'login'], function ($routes) {
    $routes->get('/', 'Home::index');


    // Content Management System


    // Kelas
    $routes->group('/kelas', function ($routes) {
        $routes->get('/', 'Kelas::index');
        $routes->get('create', 'Kelas::create');
        $routes->post('save', 'Kelas::save');
        $routes->get('edit/(:num)', 'Kelas::edit/$1');
        $routes->get('detail/(:num)', 'Kelas::detail/$1');
        $routes->get('delete/(:num)', 'Kelas::delete/$1');
    });
    // End Kelas

    // Jurusan
    $routes->group('/jurusan', function ($routes) {
        $routes->get('/', 'Jurusan::index');
        $routes->get('create', 'Jurusan::create');
        $routes->post('save', 'Jurusan::save');
        $routes->get('edit/(:num)', 'Jurusan::edit/$1');
        $routes->get('detail/(:num)', 'Jurusan::detail/$1');
        $routes->get('delete/(:num)', 'Jurusan::delete/$1');
    });
    // End Jurusan

    // Prodi
    $routes->group('/prodi', function ($routes) {
        $routes->get('/', 'Prodi::index');
        $routes->get('create', 'Prodi::create');
        $routes->post('save', 'Prodi::save');
        $routes->get('edit/(:num)', 'Prodi::edit/$1');
        $routes->get('detail/(:num)', 'Prodi::detail/$1');
        $routes->get('delete/(:num)', 'Prodi::delete/$1');
    });
    // End Prodi

    // Mahasiswa
    $routes->group('/mahasiswa', function ($routes) {
        $routes->get('/', 'Mahasiswa::index');
        $routes->get('create', 'Mahasiswa::create');
        $routes->post('store', 'Mahasiswa::store');
        $routes->get('edit/(:num)', 'Mahasiswa::edit/$1');
        $routes->get('detail/(:num)', 'Mahasiswa::detail/$1');
        $routes->get('delete/(:num)', 'Mahasiswa::delete/$1');
    });


    // // Jenis Kegiatan
    // $routes->group('/jenis-kegiatan', function ($routes) {
    //     $routes->get('/', 'JenisKegiatan::index');
    //     $routes->get('create', 'JenisKegiatan::create');
    //     $routes->post('save', 'JenisKegiatan::save');
    //     $routes->get('edit/(:num)', 'JenisKegiatan::edit/$1');
    //     $routes->get('detail/(:num)', 'JenisKegiatan::detail/$1');
    //     $routes->get('delete/(:num)', 'JenisKegiatan::delete/$1');
    // });
    // // End Jenis Kegiatan

    // // Kategori Peserta
    // $routes->group('/kategori-peserta', function ($routes) {
    //     $routes->get('/', 'KategoriPeserta::index');
    //     $routes->get('create', 'KategoriPeserta::create');
    //     $routes->post('store', 'KategoriPeserta::store');
    //     $routes->get('edit/(:num)', 'KategoriPeserta::edit/$1');
    //     $routes->post('update/(:num)', 'KategoriPeserta::update/$1');
    //     $routes->get('delete/(:num)', 'KategoriPeserta::delete/$1');
    // });
    // // End Kategori Peserta

    // // Kegiatan
    // $routes->group('/kegiatan', function ($routes) {
    //     $routes->get('/', 'Kegiatan::index');
    // });
    // // End Kegiatan

    // // Pendaftaran
    // $routes->group('/pendaftaran', function ($routes) {
    //     $routes->get('/', 'Pendaftaran::index');
    // });
    // // End Kegiatan

    // // User
    // $routes->group('/user', function ($routes) {
    //     $routes->get('/', 'User::index');
    // });
    // // End User
    // End Content Management System
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
