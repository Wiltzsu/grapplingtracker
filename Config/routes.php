<?php

use App\Controllers\CategoryController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\UserController;
use App\Controllers\AddNewController;
use App\Controllers\TrainingClassController;
use App\Controllers\PositionController;
use App\Controllers\TechniqueController;

return function (RouteCollector $router, $container) {
    $router->get('/', function() use ($container) {
        echo $container->get('Twig\Environment')->render('front_page.php');
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
    });

    $router->get('/mainview', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/main_view.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/addnew', function () use ($container) {
        $container->get(App\Controllers\AddNewController::class)->showAddNewList();
    });

    $router->get('/addtechnique', function () use ($container) {
        $container->get(App\Controllers\TechniqueController::class)->addTechniqueForm();
    });

    $router->post('/addtechnique', function () use ($container) {
        $container->get(App\Controllers\TechniqueController::class)->postTechnique($_POST);
    });

    $router->get('/addcategory', function () use ($container) {
        $container->get(App\Controllers\CategoryController::class)->addCategoryForm();
    });

    $router->post('/addcategory', function () use ($container) {
        $container->get(App\Controllers\CategoryController::class)->postCategory($_POST);
    });

    $router->get('/addposition', function () use ($container) {
       $container->get(App\Controllers\PositionController::class)->addPositionForm();
    });

    $router->post('/addposition', function () use ($container) {
        $container->get(App\Controllers\PositionController::class)->postPosition($_POST);
    });


    $router->get('/addclass', function () use ($container) {
        $container->get(App\Controllers\TrainingClassController::class)->addClassForm();
    });

    $router->post('/addclass', function () use ($container) {
        $container->get(App\Controllers\TrainingClassController::class)->postTrainingClass($_POST);
    });


    $router->get('/viewitems', function () use ($container) {
        $container->get(App\Controllers\ViewItemsController::class)->showViewItemsAccordion();
    });

    $router->get('/profile', function () {
        require __DIR__ . '/../resources/views/profile.php';
    });

    $router->get('/journal', function () {
        require __DIR__ . '/../resources/views/journal.php';
    });



    $router->get('/logtraining', function () use ($container) {
        $container->get(App\Controllers\MainViewController::class)->showJournalNoteForm();
    });

    $router->post('/logtraining', function () use ($container) {
        $container->get(App\Controllers\MainViewController::class)->postJournalEntry($_POST);
    });

    $router->get('/quicknote', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/quick_note.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });
};
