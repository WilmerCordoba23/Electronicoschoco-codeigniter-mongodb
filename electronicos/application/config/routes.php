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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'usuario/user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//ruta admin

$route['admin'] = 'administrador/admin';

$route['gestionar_productos/eliminar_compra/(:any)'] = 'administrador/eliminar_compra/$1';

$route['gestionar_productos/eliminar_productos/(:any)'] = 'administrador/eliminar_productos/$1';

$route['gestionar_productos/agregar']= 'administrador/agregar_productos';

$route['gestionar_productos/guardar']= 'administrador/guardar';

$route['gestionar_productos/productos']= 'administrador/productos';

//rutas usuarios
$route['user'] = 'usuario/user';

$route['verificar_productos'] = 'usuario/verificar';

$route['verificar_productos/compra']= 'usuario/verificar_compra';

$route['categoria_productos'] = 'usuario/categoria';

//rutas sesion
$route['login/admin']= 'login/login';

$route['login/sesion']= 'login/sesion';

$route['login/cerrar']= 'login/cerrar';

//rutas sesion ruta

$route['login/user']= 'usuario/login';

$route['login/user/registro']= 'usuario/registro';

$route['login/user/registrar']= 'usuario/registrar';

$route['login/user/sesion']= 'usuario/sesion';

$route['login/user/cerrar']= 'usuario/cerrar';

//carrito
$route['carro']= 'usuario/carro';
