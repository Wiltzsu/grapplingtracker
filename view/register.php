<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);
require_once '/opt/lampp/htdocs/technique-db-mvc/config/Database.php';

require_once '/opt/lampp/htdocs/technique-db-mvc/controller/UserRegistration.php';
// Create class for new user registering


$error_message = ''; // Initiate an empty error message variable

// Usage of the userRegistration class

// Require database connection file
$_db = Database::connect();
// Create a new register object that takes the database connection as a parameter
$userRegistration = new UserRegistration($_db);

// If submit button is pressed, use the object to run the registerUser method 
if (isset($_POST['submit'])) {
    try {
        $userRegistration->registerUser($_POST['username'], $_POST['email'], $_POST['password']);
        $_SESSION['username'] = $_POST['username']; // Consider setting this only after successful registration.
        header("Location: view/login.php"); // This should only happen if no exception was thrown.
        exit();
    } catch (Exception $e) {
        // Log the error
        error_log($e->getMessage());
        // Render an error message to the user
        $error_message = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/technique-db-mvc/public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="centered-container">
        <div class="register-container">
            <div class="card p-4">
                <h2 class="text-center mb-4">Register</h2>
                <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" class="form-control" id="password1" name="password" placeholder="Enter password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password2">Re-enter password</label>
                        <input type="password" class="form-control" id="password2" name="password_confirm" placeholder="Enter password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="view/login.php"><p>Login</p></a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
