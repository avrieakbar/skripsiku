<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Kapal::index');
$routes->get('/foreman', 'Foreman::index', ['filter' =>  'role:Foreman']);
$routes->get('/foreman/index', 'Foreman::index', ['filter' =>  'role:Foreman']);
$routes->get('/Cdr/CDR', 'CDR::CDR', ['filter' =>  'role:Foreman']);
$routes->get('/Cdr/CDRRead/(:any)', 'CDR::approval/$1', ['filter' =>  'role:Kapal']);
$routes->get('Cdr/CDRRead/(:any)', 'CDR::detailCDR/$1');
$routes->delete('Cdr/CDRRead/(:num)', 'CDR::delete/$1');
$routes->get('/Heq/heq', 'HEQ::HEQ', ['filter' =>  'role:Foreman']);
$routes->get('/Heq/HEQRead/(:any)', 'HEQ::approval/$1', ['filter' =>  'role:Kapal']);
$routes->get('Heq/CDRRead/(:any)', 'HEQ::detail/$1');
$routes->delete('Heq/CDRRead/(:num)', 'HEQ::delete/$1');
$routes->get('/Restow/restow', 'Restow::RESTOW', ['filter' =>  'role:Foreman']);
$routes->get('/Restow/RestowRead/(:any)', 'Restow::approval/$1', ['filter' =>  'role:Kapal']);
$routes->get('Restow/RestowRead/(:any)', 'Restow::detail/$1');
$routes->delete('Restow/RestowRead/(:num)', 'Restow::delete/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
