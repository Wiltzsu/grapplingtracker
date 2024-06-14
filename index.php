<?php
// Basic routing logic
$uri = $_SERVER['REQUEST_URI'];

$base = '/technique-db-mvc';
$request = str_replace($base, '', $_SERVER['REQUEST_URI']);

switch($request)
{
    case '/':
        require 'view/front_page.php';
        break;
    case '/addnew':
        require 'view/add_new.php';
        break;
    case '/viewitems':
        require 'view/view_items.php';
        break;
    case '/profile':
        require 'view/profile.php';
        break;
    case '/journal':
        require 'view/journal.php';
        break;
    case '/register':
        require 'view/register2.php';
        break;
    case '/login':
        require 'view/login.php';
        break;
    case '/mainview':
        require 'view/main_view.php';
        break;
}