<?php
/**
 * This file contains TechniqueController class and its methods.
 * 
 * PHP version 8
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
namespace App\Controllers;

use App\Models\Technique;
use App\Models\Category;
use App\Models\Position;
use App\Models\TrainingClass;
use Twig\Environment;


/**
 * This class is the TechniqueController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class TechniqueController
{
    /**
     * Constructor function for TechniqueController.
     * 
     * @param Technique     $techniqueModel     Technique model
     * @param Category      $categoryModel      Category model
     * @param Position      $positionModel      Position model
     * @param TrainingClass $trainingClassModel TrainingClass model
     * @param Environment   $twig               Twig environment
     */
    public function __construct(
        private Technique $techniqueModel,
        private Category $categoryModel,
        private Position $positionModel,
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
    }

    /**
     * Get all techniques.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
    public function getTechniques($userID) :array
    {
        return $this->techniqueModel->getTechniques($userID);
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

    /**
     * Renders the add technique form.
     * 
     * @return string
     */
    public function addTechniqueForm() :string
    {
        $userID = $_SESSION['userID'];

        $categories = $this->categoryModel->getCategories($userID);
        $positions = $this->positionModel->getPositions();
        $trainingClass = $this->trainingClassModel->getTrainingClasses($userID);
    
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;
    
        // Generate HTML content using Twig and return it instead of echoing
        return $this->twig->render(
            'addnew/add-technique.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username,
            'categories' => $categories,
            'positions' => $positions,
            'trainingClasses' => $trainingClass
            ]
        );
    }

    /**
     * Handle POST request for adding a new technique.
     * 
     * @param array $formData Form data
     * 
     * @return void
     */
    public function handlePostRequest($formData) :void
    {        
        if (isset($formData['delete'])) {
            $this->deleteTechnique(['techniqueID']);
        } else {
            $this->postTechnique($formData);
        }
    }

    /**
     * Post a new technique.
     * 
     * @param array $formData Form data
     * 
     * @return string
     */
    public function postTechnique($formData) :string
    {
        $userID = $_SESSION['userID'] ?? null;
    
        $techniqueName = $formData['techniqueName'] ?? null;
        $techniqueDescription = $formData['techniqueDescription'] ?? null;
        $categoryID = $formData['categoryID'] ?? null;
        $positionID = $formData['positionID'] ?? null;
        $classID = !empty($formData['classID']) ? $formData['classID'] : null;
    
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
            return $this->twig->render(
                'addnew/add-technique.twig', [
                'errors' => $errors,
                'input' => $formData,
                'categories' => $categories,
                'positions' => $positions,
                'trainingClasses' => $trainingClasses,
                'userID' => $userID
                ]
            );
        } else {
            $this->techniqueModel->createNewTechnique(
                $userID,
                $techniqueName,
                $techniqueDescription,
                $categoryID,
                $positionID,
                $classID
            );
            
            header('Location: addtechnique');
            exit();
        }
    }

    /**
     * Delete a technique.
     * 
     * @param int $techniqueID Technique ID
     * 
     * @return void
     */
    public function deleteTechnique($techniqueID)
    {
        $this->techniqueModel->deleteTechnique($techniqueID);
        header('Location: viewtechniques');
        exit();
    }
}
