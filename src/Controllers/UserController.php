<?php

namespace App\Controllers;

use App\Models\User;

use Twig\Environment;

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
        $errors = $this->userModel->authenticateUser($username, $password);
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

    public function register($username, $email, $password)
    {
        $errors = $this->userModel->registerUser($username, $email, $password);
        if (!empty($errors)) {
            return $errors;
        }

        // Login successful, redirect to the main view
        header('Location: login');
        exit();
    }

    public function showRegisterForm($errors = [], $input = [])
    {
        echo $this->twig->render('register.twig', ['errors' => $errors, 'input' => $input]);
    }
}
