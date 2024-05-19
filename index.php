<?php
// /index.php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/config/database.php';
require 'controller/categoryController.php';
require 'controller/difficultyController.php';

// Initialize the CategoryController with the database connection
$categoryController = new CategoryController($db);
$difficultyController = new difficultyController($db);

// Fetch data from controllers
$categories = $categoryController->getCategories();
$difficulties = $difficultyController->getDifficulties();

// Pass data to the view
require 'view/AddTechniqueView.php';
?>
