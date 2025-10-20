<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');

$routes->get('/login', 'Users::login');

$routes->get('/signup', 'Users::signup');

$routes->get('/moodPage', 'Users::moodPage');

$routes->get('/roadMap', 'Users::roadMap');

$routes->get('/adminDashboard', 'Users::adminDashboard');

$routes->get('/menu', 'Users::menu');

$routes->get('/accounts', 'Users::accounts');
