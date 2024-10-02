<?php
/**
 * This file contains the entry point for the application.
 * 
 * PHP version 8
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com 
 */
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

// Test Database Connection
try {
    // Load the database settings
    $settings = require __DIR__ . '/../config/settings.php';
    $db_settings = $settings['database'];

    // Initialize PDO
    $pdo = new PDO(
        $db_settings['dsn'],
        $db_settings['username'],
        $db_settings['password'],
        $db_settings['options']
    );

    // If successful, output this
    echo "Database connection successful!<br>";
} catch (PDOException $e) {
    // If connection fails, output error and stop execution
    echo "Database connection failed: " . $e->getMessage();
    die();  // Stop further script execution if DB connection fails
}

$container = include __DIR__ . '/../config/container.php';
$router = new RouteCollector();

$routes = include __DIR__ . '/../config/routes.php';
$routes($router, $container);

$dispatcher = new Dispatcher($router->getData());

// Get the base path
$basePath = '/grappling-tracker/public';

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
