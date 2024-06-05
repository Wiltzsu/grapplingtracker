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
require_once '/opt/lampp/htdocs/technique-db-mvc/config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * 'UserRegController' class contains a method for input validation
 * and inserting a new user to the database.
 */
class UserRegController
{
    private $_db;
    private $_username;
    private $_email;
    private $_password;
    private $_hashed_password;

    /**
     * Initializes with a database connection.
     *
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates input and checks database for existing username/email.
     * Returns errors if conditions fail.
     * 
     * @param string $username User's chosen username.
     * @param string $email    User's email address.
     * 
     * @return array Array of error messages, empty if valid.
     */
    public function validateInput($username, $email)
    {

        $errors = [];
        if (empty($this->_username)) {
            $errors['username'] = 'Please enter a valid username.';
        }

        if (strlen($this->_username) < 3 || strlen($this->_username) > 32) {
            $errors['username'] = 'Username has to be between 3 and 32 characters.';
        } else {
            $username_query = $this->_db->prepare("SELECT 1 FROM User WHERE username = ?");
            $username_query->execute([$username]);
            if ($username_query->fetch(PDO::FETCH_ASSOC)) {
                $errors['username'] = 'Username is already taken.';
            }
        }
        
        if (strlen($this->_password) < 3 || strlen($this->_password) > 72) {
            $errors['password'] = 'The password must be between 3 and 72 characters.';
        }

        if ($this->_password !== $_POST['password_confirm']) {
            $errors['password'] = 'Passwords do not match.';
        }

        if (!filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        } else {
            $email_query = $this->_db->prepare("SELECT 1 FROM User WHERE email = ?");
            $email_query->execute([$email]);
            if ($email_query->fetch(PDO::FETCH_ASSOC)) {
                $errors['email'] = 'Email address already taken.';
            }
        }

        return $errors;
    }

    /**
     * Registers a new user if validation passes.
     * Hashes password and inserts into database.
     * 
     * @param string $username Username.
     * @param string $email    Email address.
     * @param string $password Password.
     * 
     * @return array Empty if successful, errors if not.
     */
    public function registerUser($username, $email, $password)
    {
        $this->_username = $username;
        $this->_email = $email;
        $this->_password = $password;

        $errors = $this->validateInput($username, $email, $password);
        if (!empty($errors)) {
            return $errors;
        }

        $this->_hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO User (username, email, password) 
                         VALUES (:username, :email, :password)";

        $insert_statement = $this->_db->prepare($insert_query);
        $insert_statement->bindParam(":username", $this->_username, PDO::PARAM_STR);
        $insert_statement->bindParam(":email", $this->_email, PDO::PARAM_STR);
        $insert_statement->bindParam(":password", $this->_hashed_password, PDO::PARAM_STR);
        $insert_statement->execute();

        return []; // Return an empty array to signify no errors.
    }
}

// Inititalize the database connection.
$_db = Database::connect();
// Instantiate the class.
$userRegController = new UserRegController($_db);

// Initialize empty arrays to store errors and input data.
$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => '', 'email' => ''];

/**
 * Checks if the form is submitted and retrieves the input data.
 * Stores the data in the 'input' array.
 * '??' provides a default empty string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['email'] = $_POST['email'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    /**
     * Calls 'registerUser' method with the input values as arguments. 
     * Responsible for validating the data and registering the user.
     * Returns an array of errors if any exists.
     * 
     * @return Array Array of errors
     */
    $errors = $userRegController->registerUser(
        $_POST['username'], 
        $_POST['email'], 
        $_POST['password']
    );
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