<?php
/**
 * This file contains methods regarding techniques.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/** 
 * Class Technique.
 * Methods for validating input and adding techniques.
 */
class Technique
{
    /**
     * Variables for methods.
     * 
     * @var $_db                    Database connection.
     * @var $_techniqueName         Technique name.
     * @var $_techniqueDescription  Technique description.
     * @var $_categoryID            Category ID.
     * @var $_positionID            Position ID.
     * @var $_difficultyID          Difficulty ID.
     */
    private $_db;
    private $_techniqueName;
    private $_techniqueDescription;
    private $_categoryID;
    private $_positionID;
    private $_difficultyID;

    /**
     * Initialize with a database connection. 
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates the input parameters for creating a new technique.
     * Checks each parameter to ensure it is not empty.
     * Further validations can be added to check for data types or format constraints.
     * 
     * @param string $techniqueName Name of the technique.
     * @param int    $categoryID    The ID of the category.
     * @param int    $positionID    The ID of the position.
     * @param int    $difficultyID  The ID of the difficulty.
     * 
     * @return array Array of error messages, empty if valid.
     */
    private function _validateInput(
        $techniqueName,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        $errors = [];
        if (empty($techniqueName) ||
            empty($categoryID) ||
            empty($positionID) ||
            empty($difficultyID)) {
            $errors['emptyField'] = 'Field cannot be empty.';
        }
    
        return $errors;
    }

    /**
     * Adds a new technique to database if input validation passes.
     * 
     * @param string $techniqueName        Name of the technique.
     * @param string $techniqueDescription Description of the technique.
     * @param int    $categoryID           Technique category.
     * @param int    $positionID           Technique position.
     * @param int    $difficultyID         Technique difficulty.
     * 
     * @return array Empty if successful, errors if not.
     */
    public function addTechnique(
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        $this->_techniqueName = $techniqueName;
        $this->_techniqueDescription = $techniqueDescription;
        $this->_categoryID = $categoryID;
        $this->_positionID = $positionID;
        $this->_difficultyID = $difficultyID;

        $errors = $this->_validateInput(
            $techniqueName,
            $categoryID,
            $positionID,
            $difficultyID
        );
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Technique (
                techniqueName,
                techniqueDescription,
                categoryID,
                positionID,
                difficultyID
            ) VALUES (
                :techniqueName,
                :techniqueDescription,
                :categoryID,:positionID,
                :difficultyID
            )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":techniqueName", 
            $this->_techniqueName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":techniqueDescription", 
            $this->_techniqueDescription, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":categoryID", 
            $this->_categoryID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":positionID", 
            $this->_positionID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":difficultyID", 
            $this->_difficultyID, PDO::PARAM_INT
        );
        $statement->execute();

        return []; // Return an empty array to signify no errors.
    }
}