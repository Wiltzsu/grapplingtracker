<?php
/**
 * This file contains the User Controller class, which is responsible
 * for user login. It contains methods to validate user input,
 * authenticate the user and finally the class is initialized
 * for deployment.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

session_start();

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/UserLogin.php';

/**
 * 'UserController2' contains two methods, one for input validation and 
 * another one for authentication.
 */


// Initializes the database connection.
$db = Database::connect();

// Instantiate the class.
$controller = new UserLogin($db);

// Initialize empty arrays to store errors and input data.
$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => ''];

/**
 * Checks if the form is submitted and retrieves the input data.
 * Stores the data in the 'input' array.
 * '??' provides a default empty string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    /**
     * Authenticates the user.
     * Checks if the '$errors' array is empty and redirects to login.
     */
    $errors = $controller->authenticate($input['username'], $input['password']);
    if (!array_filter($errors)) { // Checks if errors array is empty
        header("Location: /technique-db-mvc/mainview");
        exit();
    }
}