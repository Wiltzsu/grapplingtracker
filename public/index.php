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


// Load Composer's autoload to manage dependencies and class loading.
require_once __DIR__ . '/../vendor/autoload.php';

// Use namespaces to organize and reference the MainController and Database classes.
use App\Controller\MainController;
use App\Config\Database;

// Connect to the database and store the connection in $db.
$db = Database::connect();

// Create an instance of MainController with the database connection and execute the main logic.
$mainController = new MainController($db);
$mainController->index();
