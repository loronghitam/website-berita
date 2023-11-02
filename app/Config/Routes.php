<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/login', 'Auth::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/admin/berita', 'Berita::index');
$routes->get('/admin/setting', 'Auth::setting');
$routes->get('/admin/add', 'Auth::store');
$routes->get('/admin/update', 'Auth::update');
$routes->get('/admin/delete', 'Auth::destory');
$routes->get('/admin/index', 'Auth::show');
$routes->get('/admin/show', 'Auth::edit');


