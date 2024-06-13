<?php
/**
 * File for user registration.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

 /**
  * User registration class containing methods.
  */
class UserReg
{
    private $_db;
    private $_username;
    private $_email;
    private $_password;
    private $_hashed_password;

    /**
     * Initializes the class with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct(PDO $db)
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

        if (strlen($this->_username) < 4 || strlen($this->_username) > 32) {
            $errors['username'] = 'Username has to be between 3 and 32 characters.';
        } else {
            $username_query = $this->_db->prepare(
                "SELECT 1 FROM User WHERE username = ?"
            );
            $username_query->execute([$username]);
            if ($username_query->fetch(PDO::FETCH_ASSOC)) {
                $errors['username'] = 'Username is already taken.';
            }
        }
        
        if (strlen($this->_password) < 4 || strlen($this->_password) > 72) {
            $errors['password'] = 'Password must be between 3 and 72 characters.';
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
        $query = "INSERT INTO User (username, email, password) 
                  VALUES (:username, :email, :password)";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(":username", $this->_username, PDO::PARAM_STR);
        $statement->bindParam(":email", $this->_email, PDO::PARAM_STR);
        $statement->bindParam(":password", $this->_hashed_password, PDO::PARAM_STR);
        $statement->execute();

        return []; // Return an empty array to signify no errors.
    }
}
