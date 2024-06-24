<?php
require_once __DIR__ . '/../models/TrainingClass.php';

class TrainingClassController
{
    public function getTrainingClasses()
    {
        $trainingClassModel = new TrainingClass();
        $getClasses = $trainingClassModel->getTrainingClasses();
        require __DIR__ . '/../../resources/views/view_items.php';
    }
}