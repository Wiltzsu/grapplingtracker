<?php

namespace App\Controllers;

use App\Models\Technique;
use App\Models\Category;
use App\Models\Position;
use Twig\Environment;

class TechniqueController
{
    public function __construct(
        private Technique $techniqueModel,
        private Category $categoryModel,
        private Position $positionModel,
        private Environment $twig
    ) {
    }

    public function getTechniques($userID) :array
    {
        return $this->techniqueModel->getTechniques($userID);
    }

    public function addTechniqueForm() :void
    {
        $categories = $this->categoryModel->getCategories();
        $positions = $this->positionModel->getPositions();

        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_technique.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username,
            'categories' => $categories,
            'positions' => $positions
        ]);
    }

    public function postTechnique($formData) :void
    {
        $userID = $_SESSION['userID'] ?? null;
    
        $techniqueName = $formData['techniqueName'] ?? null;
        $techniqueDescription = $formData['techniqueDescription'] ?? null;
        $categoryID = $formData['categoryID'] ?? null;
        $positionID = $formData['positionID'] ?? null;
    
        // Get lists for categories and positions to refill the form
        $categories = $this->categoryModel->getCategories();
        $positions = $this->positionModel->getPositions();
    
        $errors = $this->techniqueModel->validateCreateNewTechnique(
            $techniqueName,
            $techniqueDescription,
            $categoryID,
            $positionID
        );
        
        if (!empty($errors)) {
            // Pass all the originally submitted data back to the form along with the errors
            echo $this->twig->render('addnew/add_technique.twig', [
                'errors' => $errors,
                'input' => $formData,
                'categories' => $categories,
                'positions' => $positions,
                'userID' => $userID
            ]);
        } else {
            $this->techniqueModel->createNewTechnique(
                $userID,
                $techniqueName,
                $techniqueDescription,
                $categoryID,
                $positionID
            );
            
            header('Location: addnew');
            exit();
        }
    }
    

}
?>