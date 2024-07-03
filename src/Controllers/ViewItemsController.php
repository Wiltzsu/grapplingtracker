<?php

namespace App\Controllers;

use Twig\Environment;
use Psr\Container\ContainerInterface;

class ViewItemsController
{
    private $twig;
    private $container;

    public function __construct(Environment $twig, ContainerInterface $container)
    {
        $this->twig = $twig;
        $this->container = $container;
    }

    public function showViewItemsAccordion()
    {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $trainingClassController = $this->container->get(TrainingClassController::class);
        $classes = $trainingClassController->getTrainingClasses($userID);
        
        $positionController = $this->container->get(PositionController::class);
        $positions = $positionController->getPositions();

        $categoryController = $this->container->get(CategoryController::class);
        $categories = $categoryController->getCategories();
    
        $techniqueController = $this->container->get(TechniqueController::class);
        $techniques = $techniqueController->getTechniques($userID);

        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;
        
        $twig = $this->container->get('Twig\Environment');
        echo $twig->render('view_items.twig', [
            'classes' => $classes,
            'positions' => $positions,
            'categories' => $categories,
            'techniques' => $techniques,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }
}