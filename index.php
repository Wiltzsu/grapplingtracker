<?php
// /index.php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);


require __DIR__ . '/config/database.php'; // Ensure the correct path to the database config
require 'controller/categoryController.php';
require 'controller/difficultyController.php';

// Initialize the CategoryController with the database connection
$categoryController = new CategoryController($db);
$categoryController->categoryIndex();

$difficultyController = new difficultyController($db);
$difficultyController->difficultyIndex();
?>
