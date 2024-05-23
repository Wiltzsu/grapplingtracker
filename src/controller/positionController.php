<?php
/**
 * Controller category for interacting with the Difficulty model and index.
 * 
 * @package Techniquedbmvc
 * @author  William Lönnberg <william.lonnberg@gmail.com>
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './config/database.php';
require_once './model/positionModel.php';

// Create a PositionController using the factory.
$positionController = $factory->create('PositionController');

/**
 * PositionController Class
 */

class PositionController
{
    /**
     * @var Position Instance of the Position model.
     */
    private $_position;

    /**
     * Constructor method for the class initialized with a database connection.
     * 
     * @param PDO $db Database connection.
     */
    public function __construct($db) 
    {
        /**
         * Initializes the 'position' property to hold an instance of the Position
         * model passing the database connection to it.
         */
        $this->_position = new Position($db);
    }

    /**
     * Calls the 'getAllPositions' method on the Positions model to fetch all items.
     * 
     * @return array An associative array of positions.
     */
    public function getPositions(): array
    {
        return $this->_position->getAllPositions();
    }
}