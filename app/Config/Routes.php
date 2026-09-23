<?php

use CodeIgniter\Router\RouteCollection;

// Public Routes
$routes->get('/', 'Home::index');
$routes->get('/food/(:num)', 'Home::detail/$1');

// Auth Routes
$routes->get('/auth', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');

// Admin Routes (will add filter later)
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/store', 'Admin::store');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin::update/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');
