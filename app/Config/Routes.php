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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'User::login', ['filter'=>'notLogged']);
$routes->get('/register', 'User::register', ['filter'=>'notLogged']);
$routes->post('/userRegister', 'User::userRegister');
$routes->post('/userLogin', 'User::userLogin');
$routes->get('/profile', 'User::profile', ['filter'=>'isLogged']);
$routes->get('/logout', 'User::logout', ['filter'=>'isLogged']);
$routes->get('/updateprofile', 'User::updateprofile', ['filter'=>'isLogged']);
$routes->post('/profileupdate', 'User::profileupdate', ['filter'=>'isLogged']);
$routes->get('/changepassword', 'User::changepassword', ['filter'=>'isLogged']);
$routes->post('/updatepassword', 'User::updatepassword', ['filter'=>'isLogged']);
$routes->get('/deleteAccount', 'User::deleteAccount', ['filter'=>'isLogged']);
$routes->get('/treasure_crate', 'User::treasure_crate', ['filter'=>'isLogged']);
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
