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

require '../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * 'UserController2' contains two methods, one for input validation and 
 * another one for authentication.
 */
class UserController2
{
    private $_db;

    /**
     * Initializes with a database connection
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Checks if username field is empty or if the password is proper length.
     * Returns errors if conditions fail.
     *
     * @param string $username User's chosen username.
     * @param string $password User's password.
     * 
     * @return Array Array of error messages, empty if valid.
     */
    public function validateInput($username, $password)
    {
        $errors = [];
        if (empty($username)) {
            $errors['username'] = 'Please enter a valid username.';
        }
        
        if (strlen($password) < 3 || strlen($password) > 72) {
            $errors['password'] = 'Please enter password, it must be from 3 to 72 characters long.';
        }
        return $errors;
    }

    /**
     * Tries to authenticate the user.
     * Verifies the password and starts sessions.
     * Returns an array with an error if failed.
     * 
     * @param string $username Username
     * @param string $password Password
     * 
     * @return Array
     */
    public function authenticate($username, $password)
    {
        $errors = $this->validateInput($username, $password);
        if (!empty($errors)) {
            return $errors;  // Return validation errors
        }

        $query = $this->_db->prepare("SELECT * FROM User WHERE username = ?");
        $query->execute([$username]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            return [];
        } else {
            return ['password' => 'Login or password do not match.'];
        }
    }
}

// Initializes the database connection.
$db = Database::connect();
// Instantiate the class.
$controller = new UserController2($db);

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
        header("Location: /technique-db-mvc/view/main_view.php");
        exit();
    }
}