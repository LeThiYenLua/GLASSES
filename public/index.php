<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'LUXEYE');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->get('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');

// Contact routes
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->get('/about', '\App\Controllers\HomeController@about');
$router->post('/search', '\App\Controllers\HomeController@search');

$router->get('/product', '\App\Controllers\ProductController@product');
$router->post('/product', '\App\Controllers\ProductController@productOfType');
$router->get('/detail', '\App\Controllers\ProductController@detailProduct');

$router->get('/cart', '\App\Controllers\CartController@cart');
$router->post('/addCart', '\App\Controllers\CartController@addCart');
$router->get('/delCart', '\App\Controllers\CartController@delCart');
$router->post('/pay', '\App\Controllers\CartController@pay');


$router->get('/admin', '\App\Controllers\AdminController@index');
$router->get('/qldh', '\App\Controllers\AdminController@qldh');
$router->get('/qlkh', '\App\Controllers\AdminController@qlkh');
$router->get('/qlsp', '\App\Controllers\AdminController@qlsp');


$router->run();
