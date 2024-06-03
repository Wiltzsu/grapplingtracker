<?php
session_start(); // This should be the first thing in your script, before any output

// Checking if the user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Display logout button
    echo '<a href="logout.php" class="btn btn-warning">Logout</a>';
}

// Check if the user is logged in and then greet them
$username = '';

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
<p class="text-center"><?php echo $greeting; ?></p>