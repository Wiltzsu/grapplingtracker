<?php

namespace App\Controllers;

use App\Models\TrainingClass;

class TrainingClassController
{
    private $trainingClassModel;

    public function __construct(TrainingClass $trainingClassModel)
    {
        $this->trainingClassModel = $trainingClassModel;
    }

    public function getTrainingClasses($userID)
    {
        return $this->trainingClassModel->getTrainingClasses($userID);
    }

    public function postTrainingClass($userID, $instructor, $location, $duration, $classDate, $classDescription)
    {
        $errors = $this->trainingClassModel->addTrainingClass($userID, $instructor, $location, $duration, $classDate, $classDescription);
        if (!empty($errors)) {
            return ['errors' => $errors, 'success' => false];
        }

        return ['success' => true];
    }

}
?>
