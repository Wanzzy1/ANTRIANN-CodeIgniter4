<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/Antrian/(:segment)', 'Antrian::index/$1');

$routes->get('/Admin/(:segment)', 'Admin::index/$1');


$routes->setAutoRoute(true);