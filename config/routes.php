<?php

use Phroute\Phroute\RouteCollector;

return function (RouteCollector $router) {
    $router->get('/', function () {
        require __DIR__ . '/../resources/views/front_page.php';
    });

    $router->get('/addnew', function () {
        require __DIR__ . '/../resources/views/add_new.php';
    });

    $router->get('/viewitems', function () {
        require __DIR__ . '/../resources/views/view_items.php';
    });

    $router->get('/profile', function () {
        require __DIR__ . '/../resources/views/profile.php';
    });

    $router->get('/journal', function () {
        require __DIR__ . '/../resources/views/journal.php';
    });

    $router->get('/register', function () {
        require __DIR__ . '/../resources/views/register2.php';
    });

    $router->get('/login', function () {
        require __DIR__ . '/../resources/views/login.php';
    });
       // POST request to handle the login form submission
       $router->post('/login', function () {
        require __DIR__ . '/../src/controllers/UserController2.php';
    });

    $router->get('/logout', function () {
        require __DIR__ . '/../resources/views/logout.php';
    });

    $router->get('/mainview', function () {
        require __DIR__ . '/../resources/views/main_view.php';
    });
};
