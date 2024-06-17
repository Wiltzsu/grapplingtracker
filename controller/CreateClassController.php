<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/TrainingClass.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';
require_once 'CreateCategoryController.php';

class CreateClassController
{
    private $_classModel;

    public function __construct($db)
    {
        $this->_classModel = new TrainingClass($db);
    }

    public function createTrainingClass($instructor, $location, $date, $classDescription)
    {
        return $this->_classModel->addClass(
            $instructor,
            $location,
            $date,
            $classDescription
        );
    }
}