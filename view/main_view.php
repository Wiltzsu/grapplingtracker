<?php 
// Start the session
session_start();

// Display errors for debugging (remove or turn off error reporting in a production environment)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Check if the user is logged in and then greet them
$username = '';
$greeting = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $greeting = "Hello, " . htmlspecialchars($username);
} else {
    header("Location: view/login.php");
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

<div class="container centered-container">
    <div class="card p-4">
        <h2 class="text-center mb-4">Grappling Technique Journal</h2>
        <p class="text-center"><?php echo $greeting; ?></p>

        <div class="list-group">
            <a href="/technique-db-mvc/journal" class="list-group-item list-group-item-action">
                <strong>Journal:</strong> View and log your daily practice.
            </a>

            <a href="/technique-db-mvc/addnew" class="list-group-item list-group-item-action">
                <strong>Add:</strong> Add new techniques, categories, and positions.
            </a>

            <a href="/technique-db-mvc/viewitems" class="list-group-item list-group-item-action">
                <strong>View:</strong> View your techniques, categories, and positions.
            </a>

            <a href="/technique-db-mvc/profile" class="list-group-item list-group-item-action">
                <strong>Your Profile:</strong> View and edit your personal information.
            </a>
        </div>

        <?php
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
                <div class="text-center mt-3">
            <a href="logout.php" class="btn btn-primary btn1">Logout</a>
        </div><?php
        }?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
