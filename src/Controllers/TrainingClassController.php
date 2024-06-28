<?php

namespace App\Controllers;

use App\Models\TrainingClass;
use Twig\Environment;

class TrainingClassController
{
    private $trainingClassModel;
    private $twig;

    public function __construct(TrainingClass $trainingClassModel, Environment $twig)
    {
        $this->trainingClassModel = $trainingClassModel;
        $this->twig = $twig;
    }

    public function getTrainingClasses($userID)
    {
        return $this->trainingClassModel->getTrainingClasses($userID);
    }

    public function postTrainingClass($userID, $instructor, $location, $duration, $classDate, $classDescription)
    {
        $errors = $this->trainingClassModel->addTrainingClass($userID, $instructor, $location, $duration, $classDate, $classDescription);
        if (!empty($errors)) {
            return ['errors' => $errors];
        }

        return ['success' => true];
    }


}
?>
