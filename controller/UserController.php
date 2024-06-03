<?php
require '../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class that contains methods regarding user login and authentication.
 * The class takes the database connection and username and password as
 * parameters, which are passed on from the login form.
 */

$error = ['username' => '', 'password' => '', 'credentials' => ''];
$username = isset($_POST['username']) ? filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS) : '';

$db = Database::connect(); 

class UserController
{
    /**
     * @var db Database connection variable.
     * @var username Username from login form.
     * @var password Password from login form.
     * @var errors A
     */
    private $db;
    private $username;
    private $password;
    public $error = ['username' => '', 'password' => '', 'credentials' => ''];

    /**
     * Constructor method that takes the database connection as a parameter.
     * 
     */
    public function __construct($db)
    {
        /**
         * The constructor initializes the class with a database connection.
         */
        $this->db = $db;
    }

    /**
     * Validates if either of the login form's inputs are empty. 
     * 
     * It is designed to be used before attempting to authenticate a user.
     * If either field is empty, an InvalidArgumentException is thrown and
     * returned.
     * 
     * @throws InvalidArgumentException is either the username or password is empty
     * @return bool Returns true if both fields are filled, indicatin valid input.
     */
    private function validateInput()
    {
        if (empty($this->username) || empty($this->password))
        {
            $this->error['login'] = 'Please enter both username and password.';
            return false;
        }
        if (strlen($this->password) < 3 || strlen($this->password) > 72)
        {
            $this->error['password'] = 'Password must be between 5 to 72 characters long.';
            return false;
        }
        return true;
    }

    /**
     * Compares the login credentials with the database.
     * 
     * This method 
     */
    private function checkCredentials()
    {
        $query = $this->db->prepare("SELECT * FROM User WHERE username = ?");
        $query->execute([$this->username]);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || !password_verify($this->password, $user['password']))
        {
            $this->error['credentials'] = 'User does not exist or password is wrong.';
        }
        return $user; // Returns either the correct credentials or the exceptions
    }

    public function loginUser($username, $password) {
        $this->username = $username;
        $this->password = $password;

        if (!$this->validateInput() || !$this->checkCredentials()) {
            return false;
        }
        $this->setSessionVariables($this->checkCredentials());
        return true;
    }

    private function setSessionVariables($user)
    {
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;
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
$userController = new UserController($db);

if (isset($_POST['submit'])) {
    if ($userController->loginUser($_POST['username'], $_POST['password'])) {
        header("Location: ../view/main_view.php");
        exit();
    } else {
        // Handle login failure; for example, display error messages
        $error = $userController->error;
    }
}