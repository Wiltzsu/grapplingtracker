<?php

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Technique
{
    private $_db;
    private $_techniqueName;
    private $_techniqueDescription;
    private $_categoryID;
    private $_positionID;
    private $_difficultyID;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    private function validateInput($techniqueName, $categoryID, $positionID, $difficultyID)
    {
        $errors = [];
        if (empty($this->_techniqueName) || 
            empty($this->_categoryID) ||
            empty($this->_positionID) ||
            empty($this->_difficultyID)) {
            $errors['emptyField'] = 'Field cannot be empty.';
        }

        return $errors;
    }

    public function addTechnique($techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID)
    {
        $this->_techniqueName = $techniqueName;
        $this->_techniqueDescription = $techniqueDescription;
        $this->_categoryID = $categoryID;
        $this->_positionID = $positionID;
        $this->_difficultyID = $difficultyID;

        $errors = $this->validateInput($techniqueName, $categoryID, $positionID, $difficultyID);
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Technique (techniqueName, techniqueDescription, categoryID, positionID, difficultyID)
                  VALUES(:techniqueName, :techniqueDescription, :categoryID, :positionID, :difficultyID)";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(":techniqueName", $this->_techniqueName, PDO::PARAM_STR);
        $statement->bindParam(":techniqueDescription", $this->_techniqueDescription, PDO::PARAM_STR);
        $statement->bindParam(":categoryID", $this->_categoryID, PDO::PARAM_INT);
        $statement->bindParam(":positionID", $this->_positionID, PDO::PARAM_INT);
        $statement->bindParam(":difficultyID", $this->_difficultyID, PDO::PARAM_INT);
        $statement->execute();

        return []; // Return an empty array to signify no errors.
    }
}