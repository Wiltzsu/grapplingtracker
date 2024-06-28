<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function login($username, $password)
    {
        $errors = $this->userModel->authenticateUser($username, $password);
        if (!empty($errors)) {
            return ['errors' => $errors, 'success' => false];
        }

        return ['success' => true]; // Indicate success
    }

    public function register($username, $email, $password)
    {
        $errors = $this->userModel->registerUser($username, $email, $password);
        if (!empty($errors)) {
            return ['errors' => $errors, 'success' => false];
        }

        return ['success' => true]; // Indicate registration success
    }
}
