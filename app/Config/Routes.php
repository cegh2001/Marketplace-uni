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
$routes->get('inicio', 'Publicar::Principal');
$routes->get('inicio/(:num)', 'Publicar::Principal/$1');
// $routes->get('inicio', 'inicio::Principal');
$routes->get('profile/(:any)', 'Perfil::account/$1');
//ruta para q actualice la biografia de mierda esa
$routes->post('Perfil/guardar_biografia', 'Perfil::guardar_biografia');

//ruta pa q se guarden/actualicen los avatares
$routes->post('Perfil/guardarActualizarAvatar', 'Perfil::guardarActualizarAvatar');
// $routes->get('profile', 'Avatares::VistaPerfil2/$1');

$routes->get('profile-user/(:any)', 'Perfil::public/$1');
//$routes->get('profile/(:segment)', 'Perfil::account/$1', ['as' => 'perfil']);

//$routes->get('profile', 'Perfil::account', ['as' => 'perfil']);
// logout
$routes->get('/sesion/login', 'Sesion::logout');


// rutas de vista visualizar post
// $routes->get('postear', 'Publicar::index');
// $routes->post('postear', 'Publicar::publish');
// $routes->post('publicar/publish', 'Publicar::publish');
// $routes->get('publicaciones/post', 'Publicaciones::post');
// $routes->get('publicaciones/post-card', 'Publicar::indexpostcard');
// $routes->get('post', 'Publicaciones::post');
 


//rutas con post-card
$routes->get('postear', 'Publicar::index');
$routes->post('postear', 'Publicar::publish');
$routes->post('publicar/publish', 'Publicar::publish');
$routes->get('post-card', 'Publicar::indexPostCard');// FUNCIONAAAAAAAAA
$routes->get('post/(:num)', 'Publicar::IndexPost/$1');

// $routes->get('inicio', 'Publicar::indexInicio');
$routes->get('profile/(:any)', 'Publicar::indexprofile');


//$routes->get('publicaciones/post-card', 'Publicaciones::postCard');
//$routes->get('post', 'Publicar::post');










//Postear publicacion
// $routes->get('postear', 'Publicar::index');
// $routes->post('postear', 'Publicar::publish');
//para las categorias
// $routes->post('Publicar/publish', 'Publicar::publish');
//para las publicaciones
// $routes->get('post', 'Publicaciones::post');
// $routes->get('post', 'Publicar::indexpostcard');




// $routes->get('post', 'Publicaciones::indexpost');
// $routes->get('Publicaciones/indexpost', 'Publicaciones::indexpost');
// $routes->get('Publicar/indexpostcard', 'Publicar::indexpostcard');
// $routes->get('post-card', 'Publicar::indexpostcard');
// $routes->get('inicio', 'Publicaciones::indexinicio');
// $routes->get('inicio', 'Publicar::indexpostcard');














//Rutas para el CRUD
$routes->get('admin','CRUD::Vista_CRUD');
$routes->get('users-list', 'CRUD::Vista_CRUD');
$routes->get('delete/(:num)', 'CRUD::delete/$1');
$routes->get('edit-view/(:num)', 'CRUD::singleUser/$1');
$routes->post('update', 'CRUD::update');
$routes->get('user-form', 'CRUD::create');
$routes->post('submit-form', 'CRUD::store');
























/*esta ruta jode mucho, porque para acceder a la vista usuario es escribiendo por url
entonces al escribir cualquier cosa, por consiguiente cree que es un usuario
y tira error, por lo tanto para solucionarno me di cuenta (por chatgpt)
que las rutas tienen efecto cascada, asi que esta ruta va de ultimo por fines practicos
*/
//$routes->get('/(:any)', 'Perfil::public/$1');
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