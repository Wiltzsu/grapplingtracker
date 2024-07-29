<?php
// testing autodeployment
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$container = require __DIR__ . '/../config/container.php';
$router = new RouteCollector();

$routes = require __DIR__ . '/../config/routes.php';
$routes($router, $container);

$dispatcher = new Dispatcher($router->getData());

// Get the base path
$basePath = '/';

// Strip the base path from the request URI
$parsedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = str_replace($basePath, '', $parsedUrl);

// Dispatch the request
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $path);

    echo $response;
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    echo '404 Not Found';
} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
    echo '405 Method Not Allowed';
}
