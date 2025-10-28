<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // ruta por defecto
$routes->get('/productos', 'Productos::index'); // nueva ruta para el controlador Productos
$routes->get('/productos/agregar', 'Productos::agregar'); // nueva ruta para agregar productos

$routes->get('/empleados','Empleados::index');
$routes->get('/empleados/crear','Empleados::crear');
$routes->post('/empleados/guardar','Empleados::guardar');
$routes->get('/empleados/editar/(:num)','Empleados::editar/$1');
$routes->post('/empleados/actualizar/(:num)','Empleados::actualizar/$1');
$routes->get('/empleados/eliminar/(:num)','Empleados::eliminar/$1');