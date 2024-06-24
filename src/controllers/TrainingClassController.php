<?php
require_once __DIR__ . '/../models/TrainingClass.php';

class TrainingClassController
{
    public function getTrainingClasses($userID)
    {
        $trainingClassModel = new TrainingClass();
        $getClasses = $trainingClassModel->getTrainingClasses($userID);
        require __DIR__ . '/../../resources/views/view_items.php';
    }
}