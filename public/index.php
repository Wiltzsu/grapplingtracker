<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/dependencies.php';
require_once __DIR__ . '/../src/controllers/UserController.php';
require_once __DIR__ . '/../config/routes.php';

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
$routes($router, $container);

// Dispatch the request
$dispatcher = new Dispatcher($router->getData());

// Get the base path and the request URI
$base = '/technique-db-mvc/public'; // Base path should be empty as the document root is public
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = str_replace($base, '', $requestUri);

// Ensure request starts with a forward slash
if ($request === '' || $request[0] !== '/') {
    $request = '/' . $request;
}

// Debugging output
echo "Base path: '$base'<br>";
echo "Requested URI: '$request'<br>";

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $request);
    echo $response;
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    echo '404 Not Found';
} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
    echo '405 Method Not Allowed';
}
