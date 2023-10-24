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

