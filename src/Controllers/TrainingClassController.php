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
}
?>
