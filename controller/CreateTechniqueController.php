<?php
/**
 * This file is the controller for creating a new technique.
 * It contains a method for creating a technique with the help
 * of the Model.
 * It also creates a connection to the database and instantiates
 * the controller.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Technique.php';
require_once 'CreateCategoryController.php';
require_once 'CreatePositionController.php';

/**
 * Class for technique creation.
 * Instantiates the Model in the constructor.
 * Uses the instance to call 'addTechnique' method from the Model.
 */
class CreateTechniqueController
{
    /**
     * @var _techniqueModel Instance of the Technique model.
     */
    private $_techniqueModel;

    /**
     * Inititalize with a database connection.
     * 
     * @param $db Database connection
     */
    public function __construct($db)
    {
        $this->_techniqueModel = new Technique($db);
    }

    /**
     * Uses the instance of the model and adds the technique to the database.
     * 
     * @param string $techniqueName        Name of the technique.
     * @param string $techniqueDescription Description of the technique.
     * @param int    $categoryID           Technique category.
     * @param int    $positionID           Technique position.
     * @param int    $difficultyID         Technique difficulty.
     * 
     * @return Array Returns an empty array if successful or an array containing errors.
     */
    public function createTechnique(
        $userID,
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        //$userID = $_SESSION['userID'];

        return $this->_techniqueModel->addTechnique(
            $userID,
            $techniqueName,
            $techniqueDescription,
            $categoryID,
            $positionID,
            $difficultyID
        );
    }
}