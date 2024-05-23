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

require_once "./config/database.php";
require_once "./model/difficultyModel.php";

// Create a DifficultyController using the factory.
$difficultyController = $factory->create('DifficultyController');

/**
 * DifficultyController Class
 */
class DifficultyController
{
    /**
     * @var Difficulty Instance of the Difficulty model.
     */
    private $_difficulty;

    /**
     * Constructor method for the class, initializing it with a database connection.
     * 
     * @param PDO $db Database connection.
     */
    public function __construct(PDO $db)
    {
        /**
         * Initializes the 'difficulty' property to hold an instance of the Difficulty 
         * model passing the database connection to it.
         */
        $this->_difficulty = new Difficulty($db);
    }

    /**
     * Calls the 'getAllDifficulties' on the Difficulty model to fetch all items.
     * 
     * @return array An associative array of difficulties.
     */
    public function getDifficulties(): array
    {
        return $this->_difficulty->getAllDifficulties();
    }
}
?>
