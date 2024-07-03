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

    public function showLoginForm() :void
    {
        echo $this->twig->render('login.twig');
    }

    public function login($request) :void
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

    public function showRegisterForm() :void
    {
        echo $this->twig->render('register.twig');
    }

    public function register($request) :void
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

    public function logout() :void
    {
        // Clear all session variables to ensure no data persists after logout.
        $_SESSION = array();

        // Delete the session cookie.
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Destroy the session.
        session_destroy();

        // Redirect to home page.
        header("Location: /technique-db-mvc/public");
    }
}
