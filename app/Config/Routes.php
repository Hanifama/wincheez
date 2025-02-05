<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'About::index');

$routes->get('/article', 'Article::index');

$routes->get('/product/(:num)', 'Home::detailProduct/$1');

$routes->get('/article/(:num)', 'Home::detailArticle');