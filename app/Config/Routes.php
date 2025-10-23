<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // ruta por defecto
$routes->get('/productos', 'Productos::index'); // nueva ruta para el controlador Productos
$routes->get('/productos/agregar', 'Productos::agregar'); // nueva ruta para agregar productos
