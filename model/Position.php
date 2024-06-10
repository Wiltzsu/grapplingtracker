<?php
/**
 * Model for interacting with the 'Position' table in the database.
 * 
 * @package Techniquedbmvc
 * @author William  
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class Position
 * Handles database operations for 'Position' table.
 */
class Position
{
    private $_db;
    private $_positionName;
    private $_positionDescription;

    /**
     * Initializes the constructor with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    private function _validateInput($positionName, $positionDescription)
    {
        $errors = [];
        if (empty($positionName) || empty($positionDescription)) {
            $errors['emtpyField'] = 'Field cannot be empty.';
        }
        return $errors;
    }

    public function addPosition($positionName, $positionDescription)
    {
        $this->_positionName = $positionName;
        $this->_positionDescription = $positionDescription;

        $errors = $this->_validateInput($positionName, $positionDescription);

        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Position (positionName, positionDescription) VALUES (:positionName, :positionDescription)";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(":positionName", $this->_positionName, PDO::PARAM_STR);
        $statement->bindParam(":positionDescription", $this->_positionDescription, PDO::PARAM_STR);
        $statement->execute();
        return [];
    }
}