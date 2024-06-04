<?php
session_start(); // Begin a new session or resume the existing one

require '../config/Database.php';

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

/**
 * Class that contains methods regarding user login and authentication.
 * The class takes the database connection and username and password as
 * parameters, which are passed on from the login form.
 */

$db = Database::connect(); 

class UserController2
{
    private $db;
    private $error;
    private $input;

    public function __construct($db) {
        $this->db = $db;
        $this->error = ['username' => '', 'password' => ''];
        $this->input = ['username' => ''];
    }

    public function validateInput($username, $password) {
        $this->input['username'] = trim($username);
        if (empty($this->input['username'])) {
            $this->error['username'] = 'Please enter a valid username.';
        }

        if (strlen($password) < 6 || strlen($password) > 72) {
            $this->error['password'] = 'Please enter password, it must be from 6 to 72 characters long.';
        }

        return $this->error;
    }

    public function authenticate($username, $password) {
        if (implode("", $this->error) === '') {
            $result = $this->db->execute_query("SELECT * FROM users WHERE username = ?", [$username]);
            $user = $result->fetch_assoc();
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: /index.php");
                exit();
            } else {
                $this->error['password'] = 'Login or password do not match.';
            }
        }
    }
}

/**
 * Instantiate UserAuthenticator class.
 * 
 * Creates a login object that takes database connection as a parameter.
 * 
 * If submit button is pressed in the form, use the object to run
 * 'loginUser()' method with the inserted credentials.
 */

$userController2 = new UserController2($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $errors = $userController2->validateInput($username, $password);

    if (implode("", $errors) === '') {
        $userController2->authenticate($username, $password);
        header("Location: /technique-db-mvc/view/main_view.php");
        exit();
    }
}