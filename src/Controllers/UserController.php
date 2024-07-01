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

    public function login($request)
    {
        $username = $request['username'] ?? '';
        $password = $request['password'] ?? '';
        $errors = $this->userModel->authenticateUser($username, $password);
        
        if (!empty($errors)) {
            echo $this->twig->render('login.twig', ['errors' => $errors, 'input' => $request]);
        } else {
            header('Location: mainview');
            exit();
        }
    }

    public function register($request)
    {
        $username = $request['username'] ?? '';
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';
        $password_confirm = $_POST['password_confirm'] ?? '';

        $errors = $this->userModel->registerUser($username, $email, $password, $password_confirm);

        if (!empty($errors)) {
            echo $this->twig->render('register.twig', ['errors' => $errors, 'input' => $request]);
        } else {
            header('Location: login');
            exit();
        }
    }
}
