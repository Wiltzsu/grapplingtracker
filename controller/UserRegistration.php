<?php
/** REDUNDANT */
require_once '/opt/lampp/htdocs/technique-db-mvc/config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create class for new user registering
class UserRegistration {
    private $_db;
    private $username;
    private $email;
    private $password;
    private $hashed_password;

    // Constructor initializes the class with a database connection and sets up the PHP environment for session and error reporting
    public function __construct($_db)
    {
        // This represents the current instance of the class in which it is used
        $this->_db = $_db;
        session_start();
        error_reporting(E_ALL); // Report all PHP errors
        ini_set('display_errors', 1); // Display errors to the browser
    }
    // registerUser attempts to register the user with the given parameters and methods
    public function registerUser($formUsername, $formEmail, $formPassword)
    {
        // 'this' represents the current instance of the class in which it is used
        $this->username = trim($formUsername);
        $this->email = trim($formEmail);
        $this->password = trim($formPassword);
        $this->hashed_password = password_hash($this->password, PASSWORD_DEFAULT);

        $this->validateInput();
        $this->createUser();
    }

    // validateInput checks if any of the inputs are empty when submitting form
    private function validateInput() {
        if (empty($this->username)) {
            throw new Exception('Please enter a username.');
        }
        if (empty($this->email)) {
            throw new Exception('Please enter your email.');
        }
        if (empty($this->password)) {
            throw new Exception ('Please enter a password.');
        }
        if (empty($_POST['password_confirm'])) {
            throw new Exception ('Please confirm your password.');
        }
        // Checks if the second password field's input is the same as first
        if ($this->password !== $_POST['password_confirm']) {
            throw new Exception('Passwords do not match.');
        }
    }

    private function createUser()
    {
        $insert_query = "INSERT INTO User (username, email, password) VALUES(:username, :email, :password)";
        
        // Use $this to access the pdoConnection since it is set as a private property in the class
        // $this keyword is used within class methods to refer to the current object, regardless of wheter they're public, protected or private
        $statement = $this->_db->prepare($insert_query);
            
            // Bind user input variables to the prepared statement as parameters to ensure safe database insertion
            $statement->bindParam(":username", $this->username, PDO::PARAM_STR);
            $statement->bindParam(":email", $this->email, PDO::PARAM_STR);
            $statement->bindParam(":password", $this->hashed_password, PDO::PARAM_STR);

            if (!$statement->execute()) {
                throw new Exception("Error creating user.");
            }
    }
}
?>