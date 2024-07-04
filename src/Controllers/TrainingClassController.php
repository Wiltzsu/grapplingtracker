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

    public function getTrainingClasses($userID)
    {
        return $this->trainingClassModel->getTrainingClasses($userID);
    }

    public function addClassForm()
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_class.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postTrainingClass($formData) :void
    {
        $userID = $_SESSION['userID'];

        $instructor = $formData['instructor'] ?? null;
        $location = $formData['location'] ?? null;
        $duration = $formData['duration'] ?? null;
        $classDate = $formData['classDate'] ?? null;
        $classDescription = $formData['classDescription'] ?? null;

        $errors = $this->trainingClassModel->createNewClass(
            $userID,
            $instructor,
            $location,
            $duration,
            $classDate,
            $classDescription
        );

        if (!empty($errors)) {
            echo $this->twig->render('addnew/add_class.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            header('Location: addnew');
            exit();
        }
    }
}
?>
