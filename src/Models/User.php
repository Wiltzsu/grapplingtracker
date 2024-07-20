<?php

namespace App\Models;

use PDO;
use DateTime;

class User
{
    private $db;
    private $username;
    private $email;
    private $password;
    private $hashed_password;
    private $token;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    private function getLoginAttempts($userID)
    {
        date_default_timezone_set('Europe/Helsinki');

        $limit = new DateTime(); // Create a DateTime object for the current time.
        $limit->modify('-5 minute'); // Adjust the time to 5 minutes in the past.

        $query = $this->db->prepare(
            "
            SELECT COUNT(*) 
            FROM Login_Attempts 
            WHERE userID = ? AND attempt_time > ?
        "
        );
        $query->execute([$userID, $limit->format('Y-m-d H:i:s')]);
        return (int) $query->fetchColumn();
    }

    private function recordLoginAttempt($userID)
    {
        $query = $this->db->prepare("INSERT INTO Login_Attempts (userID, attempt_time) VALUES (?, NOW())");
        $query->execute([$userID]);
    }

    private function canAttemptLogin($userID)
    {
        $attempts = $this->getLoginAttempts($userID);
        return $attempts < 5;
    }

    public function validateLogin($username, $password)
    {
        $errors = [];
        if (empty($username)) {
            $errors['username'] = 'Please enter a valid username.';
        }

        if (strlen($password) < 3 || strlen($password) > 72) {
            $errors['password'] = 'Please enter password that is between 3 and 72 characters long.';
        }
        return $errors;
    }

    public function authenticateUser($username, $password)
    {
        $errors = $this->validateLogin($username, $password);
        if (!empty($errors)) {
            return $errors;  // Return validation errors
        }

        $query = $this->db->prepare("SELECT * FROM User WHERE username = ?");
        $query->execute([$username]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (!$this->canAttemptLogin($user['userID'])) {
                // Block login attempt because the limit is reached
                return ['password' => 'Too many login attempts. Try again later.'];
            }

            // Record attempt (early for potential failures)
            $this->recordLoginAttempt($user['userID']);

            if (!password_verify($password, $user['password'])) {
                // Login failed, return error message
                return ['password' => 'Login or password do not match.'];
            }

            if (!$user['is_active']) {
                return ['activation' => 'Account is not activated.'];
            }

            // Authentication successful, set session variables
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['username'] = $username;
            $_SESSION['roleID'] = $user['roleID'];
            $_SESSION['logged_in'] = true;
        } else {
            return ['password' => 'Login or password do not match.'];
        }
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
    public function validateRegistration($username, $email)
    {
        $errors = [];
        if (empty($username)) {
            $errors['username'] = 'Please enter a valid username.';
        }

        if (strlen($username) < 4 || strlen($username) > 32) {
            $errors['username'] = 'Username has to be between 3 and 32 characters.';
        } else {
            $username_query = $this->db->prepare(
                "SELECT 1 FROM User WHERE username = ?"
            );
            $username_query->execute([$username]);
            if ($username_query->fetch(PDO::FETCH_ASSOC)) {
                $errors['username'] = 'Username is already taken.';
            }
        }

        if (strlen($this->password) < 4 || strlen($this->password) > 72) {
            $errors['password'] = 'Password must be between 3 and 72 characters.';
        }

        if ($this->password !== $_POST['password_confirm']) {
            $errors['password'] = 'Passwords do not match.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        } else {
            $email_query = $this->db->prepare("SELECT 1 FROM User WHERE email = ?");
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
    public function registerUser($username, $email, $password, $token)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->token = $token;

        $errors = $this->validateRegistration($username, $email, $password);
        if (!empty($errors)) {
            return $errors;
        }

        $this->hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO User (username, email, password, token) 
                  VALUES (:username, :email, :password, :token)";

        $statement = $this->db->prepare($query);
        $statement->bindParam(":username", $this->username, PDO::PARAM_STR);
        $statement->bindParam(":email", $this->email, PDO::PARAM_STR);
        $statement->bindParam(":password", $this->hashed_password, PDO::PARAM_STR);
        $statement->bindParam(":token", $this->token, PDO::PARAM_STR);
        $statement->execute();
    }

    public function activateUser($token): bool
    {
        $query = "UPDATE User SET is_active = TRUE WHERE token = :token";
        $statement = $this->db->prepare($query);
        return $statement->execute(['token' => $token]);
    }
}
