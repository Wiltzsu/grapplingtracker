<?php
/**
 * This file contains the 'UserRegController' class, which is used when
 * a user registers to the application. The class contains methods
 * for input validation and database querying.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../src/models/UserReg.php';

/**
 * 'UserRegController' class contains a method for input validation
 * and inserting a new user to the database.
 */
class UserRegController
{
    private $_userRegModel;
    
    /**
     * Initializes with a database connection.
     *
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_userRegModel = new UserReg($db);
    }

    public function createUser($username, $email, $password)
    {
        return $this->_userRegModel->registerUser($username, $email, $password);
    }
}

// Initialize empty arrays to store errors and input data.
$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => '', 'email' => ''];

$db = Database::connect();

$userRegController = new UserRegController($db);

/**
 * Checks if the form is submitted and retrieves the input data.
 * Stores the data in the 'input' array.
 * '??' provides a default empty string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    /**
     * Calls 'registerUser' method with the input values as arguments. 
     * Responsible for validating the data and registering the user.
     * Returns an array of errors if any exists.
     * 
     * @return Array Array of errors
     */
    $errors = $userRegController->createUser($username, $email, $password);

    /**
     * If the '$errors' array is empty, the registration was successful.
     * A session is created and the user is redirected to the login
     * page.
     * If any errors, they are joined into a single string.
     */
    if (empty($errors)) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: view/login.php");
        exit();
    } else {
        $error_message = join('<br>', $errors);
    }
}