<?php
namespace App\Controllers;

use App\Models\TrainingClass;
use App\Models\Position;
use App\Models\Category;
use App\Models\Technique;
use Twig\Environment;

class ViewItemsController
{
    public function __construct(
        private Environment $twig,
        private TrainingClass $trainingClassModel,
        private Position $positionModel,
        private Category $categoryModel,
        private Technique $techniqueModel
    ) {
        $this->twig = $twig;
        $this->trainingClassModel = $trainingClassModel;
        $this->positionModel = $positionModel;
        $this->categoryModel = $categoryModel;
        $this->techniqueModel = $techniqueModel;
    }

    public function showViewItemsAccordion()
    {
        $userID = $_SESSION['userID'];

        $classes = $this->trainingClassModel->getTrainingClasses($userID);
        $positions = $this->positionModel->getPositions();
        $categories = $this->categoryModel->getCategories();
        $techniques = $this->techniqueModel->getTechniques($userID);

        echo $this->twig->render('view_items.twig', [
            'classes' => $classes,
            'positions' => $positions,
            'categories' => $categories,
            'techniques' => $techniques,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }
}
