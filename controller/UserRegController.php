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
     * Constructor method that initializes the class. It takes a
     * database connection as a parameter.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Method that validates user input. The method checks if 'username'
     * field is empty, if the username is correct length, or if the username
     * is already taken. It also checks that the password is correct length,
     * if passwords don't match, if email is valid format or if the email
     * address is already taken.
     * 
     * @param $username Username
     * @param $email    Email
     * 
     * @return Array Returns $errors array.
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
     * Executes the insert if no errors are found.
     * First it checks if validateInput() method returns any errors, if not,
     * proceeds to prepare the insert statement and executes it.
     * Returns an empty array to signify no errors
     * 
     * @param $username Username
     * @param $email    Email
     * @param $password Password
     * 
     * @return Array Returns an empty array.
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
// Create an instance of the class for user registering with the database connection.
$userRegController = new UserRegController($_db);

// Initialize empty arrays to store errors and input data.
$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => '', 'email' => ''];

/**
 * Checks if the form is submitted, and if it is, retrieves the input data
 * and stored in the 'input' array. The '??' provides a default empty
 * string if the expected data is not set.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['email'] = $_POST['email'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    /**
     * The 'registerUser' method is called with the input values as
     * arguments. This method is responsible for validating the data
     * and registering the user if the data is valid. Returns an
     * array of errors if any exists.
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
     * If there are errors, they are joined into a single string
     * which is then displayed.
     */
    if (empty($errors)) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: view/login.php");
        exit();
    } else {
        $error_message = join('<br>', $errors);
    }
}