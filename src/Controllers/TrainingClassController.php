<?php
/**
 * This file contains TrainingClassController class and its methods.
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

use App\Models\TrainingClass;
use Twig\Environment;

/**
 * This class is the TrainingClassController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class TrainingClassController
{
    /**
     * Constructor function for TrainingClassController.
     * 
     * @param TrainingClass $trainingClassModel TrainingClass model
     * @param Environment   $twig               Twig environment
     */
    public function __construct(
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
    }

    /**
     * Get all training classes.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
    public function getTrainingClasses($userID) :array
    {
        return $this->trainingClassModel->getTrainingClasses($userID);
    }

    /**
     * Renders the add training class form.
     * 
     * @return string
     */
    public function addClassForm() :string
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render(
            'addnew/add_class.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username,
            'input' => $_POST
            ]
        );
    }

    /**
     * Post a new training class.
     * 
     * @param array $formData Form data
     * 
     * @return string
     */
    public function postTrainingClass($formData) :string
    {
        $userID = $_SESSION['userID'];

        $instructor = $formData['instructor'] ?? null;
        $location = $formData['location'] ?? null;
        $duration = $formData['duration'] ?? null;
        $classDate = $formData['classDate'] ?? null;
        $classDescription = $formData['classDescription'] ?? null;
        $rounds = $formData['rounds'] ?? null;
        $roundDuration = $formData['roundDuration'] ?? null;

        $errors = $this->trainingClassModel->validateCreateNewClass(
            $instructor,
            $location,
            $duration,
            $classDate,
            $classDescription
        );

        if (!empty($errors)) {
            return $this->twig->render(
                'addnew/add_class.twig', [
                'errors' => $errors,
                'input' => $formData,
                'userID' => $userID
                ]
            );
        } else {
            
            $this->trainingClassModel->createNewClass(
                $userID,
                $instructor,
                $location,
                $duration,
                $classDate,
                $classDescription,
                $rounds,
                $roundDuration
            );
            
            header('Location: addnew');
            exit();
        }
    }

    
}
?>
