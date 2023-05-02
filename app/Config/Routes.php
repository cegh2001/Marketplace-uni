<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Sesion');
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
$routes->get('login', 'Sesion::index');
$routes->post('login', 'Sesion::login');
// $routes->post('/', 'Sesion::login');
$routes->get('register', 'Sesion::register');
$routes->post('register', 'Sesion::create');
$routes->get('inicio', 'inicio::Principal');
$routes->get('profile', 'inicio::perfil');
$routes->get('profile-user', 'inicio::perfilUser');
// logout
$routes->get('/sesion/login', 'Sesion::logout');


//Hay que buscar en algun punto de entender esto, porque esos filter son importantes
// $routes->group('Views', static function ($routes) {
//     $routes->group('',['filter'=>'AlreadyLoggedIn'], static function ($routes) {
//         $routes->get('index', 'sesion::index', ['as' => 'index']);
//         $routes->get('register', 'sesion::register', ['as' => 'register']);
//         $routes->post('create', 'sesion::create', ['as' => 'create']);
//         $routes->post('check', 'sesion::check', ['as' => 'check']);   
//     });
    
//     $routes->get('logout', 'sesion::logout', ['as' => 'logout']);
    
// });

// $routes->group('user', ['filter'=>'AuthCheck'], static function ($routes) {
//     $routes->get('inicio', 'inicio::Principal', ['as' => 'inicio']);
// });

//ultimos cambios que hice
// $routes->get('/', 'sesion::index');
// $routes->post('/', 'sesion::check');
// $routes->get('sesion', 'sesion::check');
// $routes->get('/inicio', 'inicio::Principal');
// $routes->get('/register', 'sesion::register');
// $routes->post('/register', 'sesion::create');

//las que teniamos mas algunos cambios
// $routes->get('/', 'sesion::index');
// $routes->get('/inicio', 'inicio::Principal');
// $routes->get('/register', 'sesion::register');//revisar si esta funcionando
//  $routes->post('register/create', 'sesion::create'); //esta la hiciste pero no funciona, la puedes borrar
// $routes->post('register', 'sesion::create'); //ruta que hizo funcionar el create
// $routes->get('index', 'sesion::check'); probando
//  $routes->get('/index', 'sesion::index');probando

//AGREGADO POR ISAAC
// $routes->get('/register', 'register::registro');
// $routes->post('register', 'register::registrar');
//estas rutas llaman al controlador register (que esta en desuso) y a su metodo registrar que se encontraba en el modelo, 
//necesitamos que se use el modelo session y el metodo create, ya que son los que tienen los nuevos cambios

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
