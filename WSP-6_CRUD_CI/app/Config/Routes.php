<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Students::create');

$routes->get('students', 'Students::index');
$routes->post('/Students/store', 'Students::store');

