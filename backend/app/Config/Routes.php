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

$routes->get('logout', 'Auth::logout');
$routes->post('logout', 'Auth::logout');

$routes->post('signup', 'Auth::signup');

$routes->get('/test/show', 'CRUDTesting::showUsersPage');

$routes->get('/test/create', 'CRUDTesting::createUserPage');
$routes->post('/test/storeUser', 'CRUDTesting::storeUser');

$routes->get('/test/update/(:num)', 'CRUDTesting::showUpdatePage/$1');

$routes->post('/test/update/(:num)', 'CRUDTesting::updateUser/$1');

$routes->post('/test/delete', 'CRUDTesting::deleteUser');
