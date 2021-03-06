<?php

/**
 * Front controller
 * 
 * PHP v. 7.4
 */

ini_set('session.cookie_lifetime', '864000'); // 10 dni w sekundach

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Obsługa błędów i wyjątków
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Sesje
 */
session_start();

/**
 * Routing
 */
$router = new Core\Router();

// Dodawanie tras
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);
