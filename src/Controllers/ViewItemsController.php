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
    }

    public function showTechniqueView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $techniques = $this->techniqueModel->getTechniques($userID);
        return $this->twig->render('viewitems/view-techniques.twig', [
            'techniques' => $techniques,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }

    public function showClassView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $classes = $this->trainingClassModel->getTrainingClasses($userID);
        return $this->twig->render('viewitems/view-classes.twig', [
            'classes' => $classes,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }

    public function showPositionView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $positions = $this->positionModel->getPositions($userID);
        return $this->twig->render('viewitems/view-positions.twig', [
            'positions' => $positions,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }

    public function showCategoryView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $categories = $this->categoryModel->getCategories($userID);
        return $this->twig->render('viewitems/view-categories.twig', [
            'categories' => $categories,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }
}
