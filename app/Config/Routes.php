<?php

namespace Config;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

/*
|--------------------------------------------------------------------------
| Default Route
|--------------------------------------------------------------------------
*/
$routes->get('/', 'Home::index');

/*
|--------------------------------------------------------------------------
| Documentation Routes
|--------------------------------------------------------------------------
*/
$routes->group('docs', function ($routes) {
    $routes->get('/', 'Docs::index');
    $routes->get('install', 'Docs::install');
    $routes->get('config', 'Docs::config');
    $routes->get('api', 'Docs::api');
    $routes->get('commands', 'Docs::commands');
    $routes->get('database', 'Docs::database');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected with Middleware)
|--------------------------------------------------------------------------
*/
$routes->group('admin', ['filter' => 'adminAuth'], function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('create', 'Admin::create');
    $routes->post('store', 'Admin::store');
    $routes->get('edit/(:num)', 'Admin::edit/$1');
    $routes->post('update/(:num)', 'Admin::update/$1');
    $routes->get('delete/(:num)', 'Admin::delete/$1');
});

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
$routes->group('admin', function ($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('processLogin', 'Auth::processLogin');
    $routes->get('logout', 'Auth::logout');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
$routes->group('api', function ($routes) {
    $routes->get('getServerConfig', 'Config::getServerConfig');
    $routes->get('getTables', 'Database::getTables');
    $routes->get('getTableStructure/(:any)', 'Database::getTableStructure/$1');
    $routes->get('getTableData/(:any)', 'Database::getTableData/$1');
    $routes->get('contributors', 'GitHubHelper::getContributors');
});

/*
|--------------------------------------------------------------------------
| Custom 404 Route
|--------------------------------------------------------------------------
*/
$routes->set404Override(function () {
    return view('errors/404');
});

/*
|--------------------------------------------------------------------------
| Auto Routing (Disabled for Security)
|--------------------------------------------------------------------------
*/
$routes->setAutoRoute(false);
