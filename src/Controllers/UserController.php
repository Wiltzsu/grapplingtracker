<?php
/**
 * This file contains the UserController class.
 * This class is responsible for handling user-related functionality.
 * 
 * PHP version 8.0
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */

namespace App\Controllers;

use App\Models\User;
use Twig\Environment;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * UserController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class UserController
{
    /**
     * Constructor function for UserController.
     * 
     * @param User        $userModel User model
     * @param Environment $twig      Twig environment
     */
    public function __construct(
        private User $userModel,
        private Environment $twig
    ) {
    }

    /**
     * Render the login form.
     * 
     * @return string
     */
    public function showLoginForm() :string
    {
        return $this->twig->render('login.twig');
    }

    /**
     * Log in a user.
     * 
     * @param array $request Array of request data.
     * 
     * @return void
     */
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

    /**
     * Render the register form.
     * 
     * @return string
     */
    public function showRegisterForm() :string
    {
        return $this->twig->render('register.twig');
    }

    /**
     * Render the reset password form.
     * 
     * @return string
     */
    public function showResetPasswordForm() :string
    {
        return $this->twig->render('reset_password.twig');
    }

    /**
     * Register a new user.
     * 
     * @param array $request Array of request data
     * 
     * @return string
     */
    public function register($request) :string
    {
        $username = $request['username'] ?? '';
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';

        // Generate a secure random token
        $token = bin2hex(random_bytes(16));

        $errors = $this->userModel->registerUser($username, $email, $password, $token);

        if (!empty($errors)) {
            return $this->twig->render('register.twig', ['errors' => $errors, 'input' => $request]);
        } else {
            $this->sendActivationEmail($email, $token);
            header('Location: login');
            exit();
        }
    }

    /**
     * Send an activation email to a user.
     * 
     * @param string $email Email address
     * @param string $token Activation token
     * 
     * @return void
     */
    public function sendActivationEmail($email, $token)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'william.lonnberg@gmail.com';
            $mail->Password = 'svun yijs pjui gosb';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('noreply@example.com', 'Mailer');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Activate your account';
            $mail->Body = "Please click here to activate your account: <a href='http://localhost/grappling-tracker/public/activate?token=$token'>Activate Account</a>";
            $mail->send();
            echo 'Activation email has been sent.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    /**
     * Send a password reset email to a user.
     * 
     * @param string $email Email address
     * 
     * @return void
     */
    public function sendPasswordReset($email)
    {
        
    }

    /**
     * Activate a user account.
     * 
     * @param array $request Array of request data
     * 
     * @return string
     */
    public function activate($request) :string
    {
        $token = $request['token'] ?? '';

        if ($token) {
            $result = $this->userModel->activateUser($token);
            if ($result) {
                return $this->twig->render('activation_success.twig');
            } else {
                return $this->twig->render('activation_failure.twig', ['error' => 'Invalid token or account already activated.']);
            }
        } else {
            return $this->twig->render('activation_failure.twig', ['error' => 'No token provided.']);
        }
    }

    /**
     * Log out a user.
     * 
     * @return void
     */
    public function logout() :void
    {
        // Clear all session variables to ensure no data persists after logout.
        $_SESSION = array();

        // Delete the session cookie.
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Destroy the session.
        session_destroy();

        // Redirect to home page.
        header("Location: /grappling-tracker/public/");
    }
}
