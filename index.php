<?php
// Basic routing logic
$uri = $_SERVER['REQUEST_URI'];

$base = '/technique-db-mvc';
$request = str_replace($base, '', $_SERVER['REQUEST_URI']);

switch($request)
{
    case '/':
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $greeting = "Hello, " . htmlspecialchars($username);
        } else {
            header("Location: view/login.php");
        }
        require 'view/main_view.php';
        break;
    case '/addnew':
        require 'view/add_new.php';
        break;
    case '/viewitems':
        require 'view_items.php';
        break;
    case '/profile':
        require 'view/profile.php';
        break;
    case '/journal':
        require 'view/journal.php';
}