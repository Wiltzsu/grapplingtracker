<?php
/**
 * Model for interacting with the 'Position' table in the database.
 * 
 * Creates an SQL query and fetches the positions from the database as an array.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */
namespace App\Model;

use PDO;

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class Position
 * Handles database operations for the class 'Position'.
 */
class PositionModel
{
    /**
     * @var PDO Database connection
     * '@var' is used to specify the type of a class property.
     */
    private $_db; // Ensure that $_db is always an instance of PDO

    /**
     * Constructor method for the class initialized with a database connection
     * Can only be called with an instance of PDO.
     * 
     * @param PDO $db Database connection
     *                '@param' is used to specify the type and purpose of a method parameter.
     */
    public function __construct($db) 
    {
        $this->_db = $db;
    }

    /**
     * Fetches all positions from the 'Position' table
     * 
     * @return array An associative array of difficulties.
     */
    public function getAllPositions(): array 
    {
        $statement =  $this->_db->prepare("SELECT * FROM Position");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}