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

$routes->get('/admin/adminDashboard', 'Users::adminDashboard');

$routes->get('/admin/menu', 'Users::menu');

$routes->get('/admin/accounts', 'Users::accounts');

$routes->get('/admin/orders', 'Users::orders');

$routes->post('login', 'Auth::login');

$routes->post('logout', 'Auth::logout');

$routes->post('signup', 'Auth::signup');
