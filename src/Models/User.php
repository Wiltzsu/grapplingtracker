<?php

namespace App\Models;

use PDO;

class User
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

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

    public function authenticate($username, $password)
    {
        $errors = $this->validateInput($username, $password);
        if (!empty($errors)) {
            return $errors;  // Return validation errors
        }

        $query = $this->db->prepare("SELECT * FROM User WHERE username = ?");
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
