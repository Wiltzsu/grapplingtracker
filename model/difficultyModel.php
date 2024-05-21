<?php
/**
 * Category model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William Lönnberg <william.lonnberg@gmail.com>
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class Difficulty
 * Handles database operations for the class 'Difficulty'.
 */
class Difficulty
{
    /**
     * @var PDO Database connection
     */
    private $_db; // Ensures that $_db is always an instance of PDO. Underscore for private variable.

    /** 
     * Initializes Difficulty with a database connection.
     * 
     * @param PDO $db database connection.
     */
    public function __construct($db) // Ensures that the constructor can only be called with an instance of PDO.
    {
        $this->_db = $db;
    }

    /**
     * Fetches all difficulties from the 'Difficulty' table.
     * 
     * @return array An associative array of difficulties.
     */
    public function getAllDifficulties(): array // Ensures that getAllDifficulties() always returns an array.
    {
        $statement = $this->_db->prepare("SELECT * FROM Difficulty");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}