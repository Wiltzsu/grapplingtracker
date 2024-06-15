<?php
/**
 * This file is responsible for creating a new
 * training class.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

 require_once __DIR__ . '/../config/Database.php';
 require_once __DIR__ . '/../model/TrainingClass.php';
 require_once 'CreatePositionController.php';
 require_once 'CreateTechniqueController.php';
 require_once 'CreateCategoryController.php';

 /**
  * Class for creating training class.
  * Includes a constructor and a method for class creation.
  */
class CreateClassController
{
    private $_classModel;

    /**
     * Initializes with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_classModel = new TrainingClass($db);
    }

    public function createTrainingClass(
        $instructor,
        $classDescription,
        $location,
        $date
    ) {
        return $this->_classModel->addClass(
            $instructor,
            $classDescription,
            $location,
            $date
        );
    }
}