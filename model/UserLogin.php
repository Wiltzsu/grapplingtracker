<?php

class UserLogin
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
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['username'] = $username;
            $_SESSION['roleID'] = $user['roleID'];
            $_SESSION['logged_in'] = true;
            return [];
        } else {
            return ['password' => 'Login or password do not match.'];
        }
    }
}