<?php

namespace App\Controllers;

use App\Models\TrainingClass;

class TrainingClassController {
    private $trainingClassModel;

    public function __construct(TrainingClass $trainingClassModel) {
        $this->trainingClassModel = $trainingClassModel;
    }

    public function getTrainingClasses($userID) {
        $getClasses = $this->trainingClassModel->getTrainingClasses($userID);
        require __DIR__ . '/../../resources/views/view_items.php';
    }
}
?>
