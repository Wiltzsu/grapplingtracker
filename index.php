<?php
// Basic routing logic
$uri = $_SERVER['REQUEST_URI'];

$base = '/technique-db-mvc';
$request = str_replace($base, '', $_SERVER['REQUEST_URI']);

switch($request)
{
    case '/':
        require 'view/main_view.php';
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
        require 'view/register.php';
        break;
    case '/register2':
        require 'view/register2.php';
        break;
}