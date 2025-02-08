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
$routes->get('docs', 'Docs::index');
$routes->get('docs/install', 'Docs::install');
$routes->get('docs/config', 'Docs::config');
$routes->get('docs/api', 'Docs::api');
$routes->get('docs/commands', 'Docs::commands');
$routes->get('docs/database', 'Docs::database');
/*
|--------------------------------------------------------------------------
| Admin Routes (Protected with Middleware)
|--------------------------------------------------------------------------
*/
$routes->get('admin', 'Admin::index', ['filter' => 'adminAuth']);
$routes->get('admin/create', 'Admin::create', ['filter' => 'adminAuth']);
$routes->post('admin/store', 'Admin::store', ['filter' => 'adminAuth']);
$routes->get('admin/edit/(:num)', 'Admin::edit/$1', ['filter' => 'adminAuth']);
$routes->post('admin/update/(:num)', 'Admin::update/$1', ['filter' => 'adminAuth']);
$routes->get('admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'adminAuth']);
/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
$routes->get('admin/login', 'Auth::login');
$routes->post('admin/processLogin', 'Auth::processLogin');
$routes->get('admin/logout', 'Auth::logout');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
$routes->get('api/getServerConfig', 'Config::getServerConfig');
$routes->get('api/getTables', 'Database::getTables');
$routes->get('api/getTableStructure/(:any)', 'Database::getTableStructure/$1');
$routes->get('api/getTableData/(:any)', 'Database::getTableData/$1');
$routes->get('api/contributors', 'GitHubHelper::getContributors');
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