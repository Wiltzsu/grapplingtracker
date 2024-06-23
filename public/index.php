<?php

require __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

// Load settings
$settings = require __DIR__ . '/../config/settings.php';

// Initialize the DI container
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/../config/dependencies.php');
$container = $containerBuilder->build();
$container->set('settings', $settings['settings']);

// Create RouteCollector and load routes
$router = new RouteCollector();
$routes = require __DIR__ . '/../config/routes.php';
$routes($router);

// Dispatch the request
$dispatcher = new Dispatcher($router->getData());

// Get the base path and the request URI
$base = '/technique-db-mvc/public'; // Update base path if needed

// Parse the request URI
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Ensure that $requestUri is a string
if (!is_string($requestUri)) {
    $requestUri = '';
}

$request = str_replace($base, '', $requestUri);

// Ensure request starts with a forward slash
if ($request === '' || $request[0] !== '/') {
    $request = '/' . $request;
}

// Debugging output
echo "Requested URI: $request<br>";

// Dispatch the request and capture the response
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $request);
    echo $response;
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    echo '404 Not Found';
} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
    echo '405 Method Not Allowed';
}
