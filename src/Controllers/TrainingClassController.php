<?php

namespace App\Controllers;

use App\Models\TrainingClass;
use Twig\Environment;

class TrainingClassController
{
    public function __construct(
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
    }

    public function getTrainingClasses($userID) :array
    {
        return $this->trainingClassModel->getTrainingClasses($userID);
    }

    public function addClassForm() :string
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render('addnew/add_class.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username,
            'input' => $_POST
        ]);
    }

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
            return $this->twig->render('addnew/add_class.twig', [
                'errors' => $errors,
                'input' => $formData,
                'userID' => $userID
            ]);
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
