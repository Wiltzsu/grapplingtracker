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
        $errors = $this->userModel->authenticate($username, $password);
        if (!empty($errors)) {
            return $errors; // Return validation errors
        }

        // Login successful, redirect to the main view
        header('Location: mainview');
        exit();
    }
}
