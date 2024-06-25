<?php

use Phroute\Phroute\RouteCollector;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;

return function (RouteCollector $router, $container) {
    $router->get('/', function () {
        require __DIR__ . '/../resources/views/front_page.php';
    });

    $router->get('/addnew', function () {
        require __DIR__ . '/../resources/views/add_new.php';
    });

    $router->get('/viewitems', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if ($userID) {
            $controller = $container->get(TrainingClassController::class);
            $controller->getTrainingClasses($userID);
        } else {
            echo "User not logged in.";
        }
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

    $router->get('/login', function () use ($container) {
        $controller = $container->get(UserController::class);
        $controller->showLoginForm();
    });

    $router->post('/login', function () use ($container) {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        $controller = $container->get(UserController::class);
        $errors = $controller->login($username, $password);

        if (!empty($errors)) {
            $controller->showLoginForm($errors, $_POST);
        }
    });

    $router->get('/logout', function () {
        require __DIR__ . '/../resources/views/logout.php';
    });

    $router->get('/mainview', function () {
        require __DIR__ . '/../resources/views/main_view.php';
    });
};
