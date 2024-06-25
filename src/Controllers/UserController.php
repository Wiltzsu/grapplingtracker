<?php

namespace App\Controllers;

use Twig\Environment;
use App\Models\User;

class UserController
{
    private $userModel;
    private $twig;

    public function __construct(User $userModel, Environment $twig)
    {
        $this->userModel = $userModel;
        $this->twig = $twig;
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

    public function showLoginForm($errors = [], $input = [])
    {
        echo $this->twig->render('login.twig', ['errors' => $errors, 'input' => $input]);
    }
}
