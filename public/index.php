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
use App\Core\Router;

$router = new Router();

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

try {
    $router->direct($url);
} catch (\Exception $e) {
    echo $e->getMessage();
}