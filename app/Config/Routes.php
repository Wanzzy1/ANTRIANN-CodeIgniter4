<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  ini web utama ceritanya
$routes->get('/', 'Pages::index');
$routes->get('/Antrian/(:segment)', 'Antrian::index/$1');


// ini admin ceritanya
$routes->get('Dashboard', 'Dashboard::index');


$routes->setAutoRoute(true);