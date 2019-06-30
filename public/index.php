<?php

require "../vendor/autoload.php";
use AppNews\Routes;

// print_r($_SERVER);
$router = new Routes();
/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

// SimpleRouter::setDefaultNamespace('\AppNews\Controller');

// // Start the routing
// SimpleRouter::start();

$router->get('/accueil', 'home');
$router->get('/test-get', 'test-api');

$router->startRouter();
