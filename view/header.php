<?php 
// Start the session
session_start();

// Display errors for debugging (remove or turn off error reporting in a production environment)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Check if the user is logged in and then greet them
$username = '';
$greeting1 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $greeting1 = "Hello, " . htmlspecialchars($username);
} else {
    header("Location: login.php");
}

$userID = '';
$greeting2 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
    $greeting2 = htmlspecialchars($userID);
} else {
    header("Location: view/login.php");
}

$roleID = '';
$greeting3 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['roleID']) && !empty($_SESSION['roleID'])) {
    $roleID = $_SESSION['roleID'];
    $greeting3 = htmlspecialchars($roleID);
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