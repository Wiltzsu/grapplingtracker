<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\MainController;
use App\Config\Database;

$db = Database::connect();

// Create the main controller and invoke the index method
$mainController = new MainController($db);
$mainController->index();
