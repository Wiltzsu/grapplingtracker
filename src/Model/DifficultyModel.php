<?php
namespace App\Model;

use PDO;

/**
 * Difficulty model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class Difficulty
 * Handles database operations for the class 'Difficulty'.
 */
class DifficultyModel
{
    /**
     * @var PDO Database connection.
     * '@var' is used to specify the type of a class property.
     */
    private $_db; 

    /** 
     * Constructor method for the class initialized with database connection.
     * Can only be called with an instance of PDO.
     * 
     * @param PDO $db database connection.
     *                '@param' is used to specify the type and purpose of a method parameter.
     */
    public function __construct(PDO $db)
    {
        $this->_db = $db;
    }

    /**
     * Fetches all difficulties from the 'Difficulty' table.
     * 
     * @return array An associative array of difficulties.
     */
    public function getAllDifficulties(): array
    {
        $statement = $this->_db->prepare("SELECT * FROM Difficulty");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}