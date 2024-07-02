<?php

use App\Controllers\CategoryController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;
use App\Controllers\PositionController;
use App\Controllers\TechniqueController;

return function (RouteCollector $router, $container) {
    $router->get('/', function () {
        require __DIR__ . '/../resources/views/front_page.php';
    });

    $router->get('/register', function () use ($container) {
        echo $container->get('Twig\Environment')->render('register.twig');
    });

    $router->post('/register', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->register($_POST);
    });

    $router->get('/login', function () use ($container) {
        echo $container->get('Twig\Environment')->render('login.twig');
    });
    
    $router->post('/login', function () use ($container) {
        $container->get(App\Controllers\UserController::class)->login($_POST);
    });

    $router->get('/logout', function () {
        require __DIR__ . '/../resources/views/logout.php';
    });

    // Route to display the form
    $router->get('/addnew', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $twig = $container->get('Twig\Environment');
        $roleID = $_SESSION['roleID'] ?? null;
        echo $twig->render('addnew/add_new.twig', [
            'userID' => $userID,
            'roleID' => $roleID,

            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/addtechnique', function () use ($container) {
        $container->get(App\Controllers\TechniqueController::class)->addTechniqueForm();
    });

    $router->post('/addtechnique', function () use ($container) {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        // Retrieve posted form data
        $techniqueName = $_POST['techniqueName'] ?? null;
        $techniqueDescription = $_POST['techniqueDescription'] ?? null;
        $categoryID = $_POST['categoryID'] ?? null;
        $positionID = $_POST['positionID'] ?? null;
        $difficultyID = $_POST['difficultyID'] ?? null;

        $techniqueController = $container->get(TechniqueController::class);
        $result = $techniqueController->postTechnique($userID, $techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID);

        if ($result['success']) {
            header('Location: addnew');
            exit();
        } else {
            $twig = $container->get('Twig\Environment');
            echo $twig->render('addnew/add_technique.twig', [
                'userID' => $_SESSION['userID'] ?? null,
                'username' => $_SESSION['username'] ?? null,
                'roleID' => $_SESSION['roleID'] ?? null,
                'errors' => $result['errors'],
                'input' => $_POST
            ]);
        }
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
    
        $techniqueController = $container->get(TechniqueController::class);
        $techniques = $techniqueController->getTechniques($userID);

        $twig = $container->get('Twig\Environment');
        $roleID = $_SESSION['roleID'] ?? null;
        echo $twig->render('view_items.twig', [
            'classes' => $classes,
            'positions' => $positions,
            'categories' => $categories,
            'techniques' => $techniques,
            'roleID' => $roleID,

            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/profile', function () {
        require __DIR__ . '/../resources/views/profile.php';
    });

    $router->get('/journal', function () {
        require __DIR__ . '/../resources/views/journal.php';
    });

    $router->get('/mainview', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/main_view.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/logtraining', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/log_training.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });

    $router->get('/quicknote', function () use ($container) {
        $twig = $container->get('Twig\Environment');
        echo $twig->render('mainview/quick_note.twig', [
            'username' => $_SESSION['username'] ?? null
        ]);
    });
};
