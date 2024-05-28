<?php
/**
 * Entry point for the application.
 * Sets up error logging, initializes database connection, and starts the main controller.
 *
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Load Composer's autoload to manage dependencies and class loading
require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Database;

// Define the base URL for easier reference throughout the application.
define('BASE_URL', 'http://localhost/technique-db-mvc/public/');

// Get the URL from the query string and sanitize it.
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : null;
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

// Database connection setup for using Database class
$db = Database::connect();

$controller = (isset($url[0]) && $url[0] != '') ? 'App\\Controller\\' . ucfirst($url[0]) . 'Controller' : 'App\\Controller\\MainController';

// Determine the method from the URL. Default to 'index' if no method is specified.
$method = isset($url[1]) ? $url[1] : 'index';

if ($url[0] === 'technique' && $url[1] === 'new') {
    $controller = 'App\\Controller\\MainController';
    $method = 'newTechnique';


}
// Extract any additional parameters from the URL to pass to the controller method.
$params = array_slice($url, 2);

// Check if the specified controller class exists.
if (class_exists($controller)) {
    // Instantiate the controller if it exists.
    $controllerObject = new $controller($db);

    // Check if the controller has the method specified in the URL.
    if (method_exists($controllerObject, $method)) {
        // If the method exists, invoke it with the parameters.
        call_user_func_array([$controllerObject, $method], $params);
    } else {
        // Output an error message if the method does not exist.
        echo "Method does not exist.";
    }
} else {
    // Output an error message if the controller class does not exist.
    echo "Controller does not exist.";
}