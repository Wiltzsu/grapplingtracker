<?php
/**
 * REDUNDANT 
 * This file is the first version of user controller and is 
 * now replaced by 'UserController2'.
 */
require '../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class that contains methods regarding user login and authentication.
 * The class takes the database connection and username and password as
 * parameters, which are passed on from the login form.
 */

$db = Database::connect(); 

class UserController
{
    /**
     * @var db Database connection variable.
     * @var username Username from login form.
     * @var password Password from login form.
     */
    private $db;
    private $username;
    private $password;

    /**
     * Constructor method that takes the database connection as a parameter.
     * 
     */
    public function __construct($db)
    {
        /**
         * The constructor initializes the class with a database connection.
         */
        $this->db = $db;
    }

    /**
     * Validates if either of the login form's inputs are empty. 
     * 
     * It is designed to be used before attempting to authenticate a user.
     * If either field is empty, an InvalidArgumentException is thrown and
     * returned.
     * 
     * @throws InvalidArgumentException is either the username or password is empty
     * @return bool Returns true if both fields are filled, indicatin valid input.
     */
    private function validateInput()
    {
        if (empty($this->username) || empty($this->password)) {
            throw new Exception('Please enter both username and password.');
        }
        return true; // Returns the Exception to the loginUser method when the if block is true
    }

    /**
     * Compares the login credentials with the database.
     * 
     * This method 
     */
    private function checkCredentials()
    {
        // '?' acts as a placeholder and tells PDO to expect a parameter when the prepared statement is executed
        $query = $this->db->prepare("SELECT * FROM User WHERE username = ?"); 
        // Execute the prepared statement with the provided username. This replaces the '?' placeholder with the actual username, ensuring the value is properly quoted and escaped
        $query->execute([$this->username]);
        // Retrieve the result of the query as an associative array where column names are keys. This array represents the user data fetched from the database
        // Fetch is used to retrieve the next row from the result set
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        // Check if user exists
        if (!$user) { // If the user does not exist, throw an exception
            throw new Exception('No such user exists.');
        // If the user is found, verify the form input password with the database password
        } elseif (!password_verify($this->password, $user['password'])) { 
            throw new Exception('Wrong password.'); // If the password does not match, throw an exception
        }
        return $user; // Returns either the correct credentials or the exceptions
    }

    public function loginUser($username, $password) 
    {
        // 'this' represents the current instance of the class in which it is used
        $this->username = $username;
        $this->password = $password;

        // Validates input and checks credentials. Throws exceptions on failure
        $user = $this->validateInput(); // This is also used to call other methods in the same object
        $user = $this->checkCredentials();
        // Sets session variables upon successful login
        $this->setSessionVariables($user);
        return true;
    }

    private function setSessionVariables($user)
    {
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;
    }

}

/**
 * Instantiate UserAuthenticator class.
 * 
 * Creates a login object that takes database connection as a parameter.
 * 
 * If submit button is pressed in the form, use the object to run
 * 'loginUser()' method with the inserted credentials.
 */
$userController = new UserController($db);

// If submit button is pressed in the form, use the object to run the loginUser method with inserted credentials
if (isset($_POST['submit'])) {
    if ($userController->loginUser($_POST['username'], $_POST['password'])) {
    // If the login is successful, redirect the user to the index page
    header("Location: /technique-db-mvc/view/main_view.php");
    exit();
    }
}
