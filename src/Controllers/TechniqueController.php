<?php

namespace App\Controllers;

use App\Models\Technique;
use App\Models\Category;
use App\Models\Position;
use App\Models\TrainingClass;
use Twig\Environment;

class TechniqueController
{
    public function __construct(
        private Technique $techniqueModel,
        private Category $categoryModel,
        private Position $positionModel,
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
    }

    public function getTechniques($userID) :array
    {
        return $this->techniqueModel->getTechniques($userID);
    }

    public function addTechniqueForm() :string
    {
        $userID = $_SESSION['userID'];

        $categories = $this->categoryModel->getCategories($userID);
        $positions = $this->positionModel->getPositions();
        $trainingClass = $this->trainingClassModel->getTrainingClasses($userID);
    
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;
    
        // Generate HTML content using Twig and return it instead of echoing
        return $this->twig->render('addnew/add_technique.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username,
            'categories' => $categories,
            'positions' => $positions,
            'trainingClasses' => $trainingClass
        ]);
    }

    public function handlePostRequest($formData) :void
    {        
        if (isset($formData['delete'])) {
            $this->deleteTechnique(['techniqueID']);
        } else {
            $this->postTechnique($formData);
        }
    }

    public function postTechnique($formData) :string
    {
        $userID = $_SESSION['userID'] ?? null;
    
        $techniqueName = $formData['techniqueName'] ?? null;
        $techniqueDescription = $formData['techniqueDescription'] ?? null;
        $categoryID = $formData['categoryID'] ?? null;
        $positionID = $formData['positionID'] ?? null;
        $classID = $formData['classID'] ?? null;
    
        // Get lists for categories and positions to refill the form
        $categories = $this->categoryModel->getCategories($userID);
        $positions = $this->positionModel->getPositions();
        $trainingClasses = $this->trainingClassModel->getTrainingClasses($userID);
    
        $errors = $this->techniqueModel->validateCreateNewTechnique(
            $techniqueName,
            $techniqueDescription,
            $categoryID,
            $positionID,
            $classID
        );
        
        if (!empty($errors)) {
            // Pass all the originally submitted data back to the form along with the errors
            return $this->twig->render('addnew/add_technique.twig', [
                'errors' => $errors,
                'input' => $formData,
                'categories' => $categories,
                'positions' => $positions,
                'trainingClasses' => $trainingClasses,
                'userID' => $userID
            ]);
        } else {
            $this->techniqueModel->createNewTechnique(
                $userID,
                $techniqueName,
                $techniqueDescription,
                $categoryID,
                $positionID,
                $classID
            );
            
            header('Location: addnew');
            exit();
        }
    }

    public function deleteTechnique($techniqueID)
    {
        $this->techniqueModel->deleteTechnique($techniqueID);
        header('Location: viewtechniques');
        exit();
    }
}
?>