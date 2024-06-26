<?php

use App\Controllers\CategoryController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;
use App\Controllers\PositionController;

return function (RouteCollector $router, $container) {
    $router->get('/', function () {
        require __DIR__ . '/../resources/views/front_page.php';
    });

    $router->get('/addnew', function () {
        require __DIR__ . '/../resources/views/add_new.php';
    });

    $router->get('/viewitems', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }
    
        $trainingClassController = $container->get(TrainingClassController::class);
        $classes = $trainingClassController->getTrainingClasses($userID);
        
        $positionController = $container->get(PositionController::class);
        $positions = $positionController->getPositions();

        $categoryController = $container->get(CategoryController::class);
        $categories = $categoryController->getCategories();
    
        $twig = $container->get('Twig\Environment');
        $roleID = $_SESSION['roleID'] ?? null;
        echo $twig->render('view_items.twig', [
            'classes' => $classes,
            'positions' => $positions,
            'categories' => $categories,
            'roleID' => $roleID
        ]);
    });

    $router->get('/profile', function () {
        require __DIR__ . '/../resources/views/profile.php';
    });

    $router->get('/journal', function () {
        require __DIR__ . '/../resources/views/journal.php';
    });

    $router->get('/register', function () use ($container) {
        $controller = $container->get(UserController::class);
        $controller->showRegisterForm();
    });

    $router->post('/register', function () use ($container) {
        $username = $_POST['username'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        $controller = $container->get(UserController::class);
        $errors = $controller->register($username, $email, $password);

        if (!empty($errors)) {
            $controller->showRegisterForm($errors, $_POST);
        }
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
