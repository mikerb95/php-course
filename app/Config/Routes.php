<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Default route
$routes->get('/productos', 'Productos::index'); // New route for Productos controller
$routes->get('/productos/agregar', 'Productos::agregar'); // New route for adding products
