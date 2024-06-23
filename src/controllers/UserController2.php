<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../src/models/UserLogin.php';

// Initialize the database connection
$db = Database::connect();

// Instantiate the class
$controller = new UserLogin($db);

// Initialize empty arrays to store errors and input data
$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => ''];

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    $errors = $controller->authenticate($input['username'], $input['password']);
    if (!array_filter($errors)) {
        header("Location: mainview");
        exit();
    }
}
