<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\MainController;

// Create the main controller and invoke the index method
$mainController = new MainController();
$mainController->index();
