<?php

use Phroute\Phroute\RouteCollector;

return function (RouteCollector $router, $container) {
    $router->get('/', function() use ($container) {
        echo $container->get('Twig\Environment')->render('front_page.twig');
    });

    $router->filter('auth', function() {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }
    });

    $router->get('/register', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->showRegisterForm();
    });

    $router->post('/register', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->register($_POST);
    });

    $router->get('/login', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->showLoginForm();
    });
    
    $router->post('/login', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->login($_POST);
    });

    $router->get('/logout', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->logout($_POST);
    }, ['before' => 'auth']);

    $router->get('/mainview', function () use ($container) {
        $container->get(App\Controllers\MainViewController::class)->showMainView();
    }, ['before' => 'auth']);

    $router->get('/addnew', function () use ($container) {
        $container->get(App\Controllers\AddNewController::class)->showAddNewList();
    }, ['before' => 'auth']);

    $router->get('/addtechnique', function () use ($container) {
        $container->get(App\Controllers\TechniqueController::class)->addTechniqueForm();
    }, ['before' => 'auth']);

    $router->post('/addtechnique', function () use ($container) {
        $container->get(App\Controllers\TechniqueController::class)->postTechnique($_POST);
    }, ['before' => 'auth']);

    $router->get('/addcategory', function () use ($container) {
        $container->get(App\Controllers\CategoryController::class)->addCategoryForm();
    }, ['before' => 'auth']);

    $router->post('/addcategory', function () use ($container) {
        $container->get(App\Controllers\CategoryController::class)->postCategory($_POST);
    }, ['before' => 'auth']);

    $router->get('/addposition', function () use ($container) {
       $container->get(App\Controllers\PositionController::class)->addPositionForm();
    }, ['before' => 'auth']);

    $router->post('/addposition', function () use ($container) {
        $container->get(App\Controllers\PositionController::class)->postPosition($_POST);
    }, ['before' => 'auth']);

    $router->get('/addclass', function () use ($container) {
        $container->get(App\Controllers\TrainingClassController::class)->addClassForm();
    }, ['before' => 'auth']);

    $router->post('/addclass', function () use ($container) {
        $container->get(App\Controllers\TrainingClassController::class)->postTrainingClass($_POST);
    }, ['before' => 'auth']);

    
    $router->get('/viewtechniques', function () use ($container) {
        $container->get(App\Controllers\ViewItemsController::class)->showTechniqueView();
    }, ['before' => 'auth']);

    $router->get('/viewclasses', function () use ($container) {
        $container->get(App\Controllers\ViewItemsController::class)->showClassView();
    }, ['before' => 'auth']);

    $router->get('/viewpositions', function () use ($container) {
        $container->get(App\Controllers\ViewItemsController::class)->showPositionView();
    }, ['before' => 'auth']);

    $router->get('/viewcategories', function () use ($container) {
        $container->get(App\Controllers\ViewItemsController::class)->showCategoryView();
    }, ['before' => 'auth']);

    $router->get('/profile', function () use ($container) {
        $container->get(App\Controllers\ProfileController::class)->showProfile();
    }, ['before' => 'auth']);

    $router->get('/logtraining', function () use ($container) {
        $container->get(App\Controllers\MainViewController::class)->showJournalNoteForm();
    }, ['before' => 'auth']);

    $router->post('/logtraining', function () use ($container) {
        $container->get(App\Controllers\MainViewController::class)->postJournalEntry($_POST);
    }, ['before' => 'auth']);

    $router->get('/quicknote', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/quick_note.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });
};
