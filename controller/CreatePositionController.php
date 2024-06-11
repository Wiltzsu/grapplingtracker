<?php
/**
 * Controller category for interacting with the difficulty model and index.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Position.php';
require_once 'CreateTechniqueController.php';
require_once 'CreateCategoryController.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * PositionController Class
 */

class CreatePositionController
{
    /**
     * @var _positionModel Instance of the Position model.
     */
    private $_positionModel;

    /**
     * Initialize with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db) 
    {
        /**
         * Initializes the 'position' property to hold an instance of the Position
         * model passing the database connection to it.
         */
        $this->_positionModel = new Position($db);
    }

    public function createPosition($positionName, $positionDescription)
    {
        return $this->_positionModel->addPosition($positionName, $positionDescription);
    }
}