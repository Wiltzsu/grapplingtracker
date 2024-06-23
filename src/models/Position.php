<?php
/**
 * Model for interacting with the 'Position' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William  
 * @license MIT License
 */

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

    /**
     * Validates the input parameters for creating a new position.
     * Checks each parameter to ensure its not empty.
     * Checks if position already exists.
     * 
     * Further validations can be added to check for data types or 
     * format constraints.
     * 
     * @param string $positionName        Name of the position.
     * @param string $positionDescription Description of the position.
     * 
     * @return Array Array of error messages, empty if valid.
     */
    private function _validateInput($positionName, $positionDescription)
    {
        $errors = [];
        if (empty($positionName) || empty($positionDescription)) {
            $errors['empty_field'] = 'Field cannot be empty.';
        }

        $positionExists = $this->_db->prepare(
            "SELECT 1 FROM Position WHERE positionName = ?"
        );
        $positionExists->execute([$positionName]);
        if ($positionExists->fetch(PDO::FETCH_ASSOC)) {
            $errors['positionExists'] = 'Position name is already used.';
        }
        return $errors;
    }

    /**
     * Add a new position to the database if input validation passes.
     * 
     * @param string $positionName        Name of the position.
     * @param string $positionDescription Description of the category.
     * 
     * @return Array Empty if successful, errors if not.
     */
    public function addPosition($positionName, $positionDescription)
    {
        $this->_positionName = $positionName;
        $this->_positionDescription = $positionDescription;

        $errors = $this->_validateInput($positionName, $positionDescription);

        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Position (
                positionName, positionDescription
            ) VALUES (
                :positionName, :positionDescription
            )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":positionName", 
            $this->_positionName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":positionDescription", 
            $this->_positionDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }

    /** 
     * Fetches positions from database.
     * 
     * @return Array Return array of positions.
     */
    public function readPositions()
    {
        $query = "SELECT * FROM Position ORDER BY PositionName";

        $statement = $this->_db->prepare($query);

        $statement->execute();

        $positionArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $positionArray;
    }

    /**
     * Deletes position from the database.
     * 
     * @return null Returns null if 'positionID' is not set.
     */
    public function deletePosition()
    {
        if (isset($_POST['positionID'])) {
            if (isset($_POST['deletePosition'])) {
                // Assign the 'positionID' value from the form to a variable.
                $positionID = $_POST['positionID'];

                $query = "DELETE FROM Position WHERE positionID=:positionID";

                $delete = $this->_db->prepare($query);

                $delete->bindValue(':positionID', $positionID, PDO::PARAM_INT);

                $delete->execute();
                header("Location: /technique-db-mvc/viewitems");
                exit();
            }
        }
    }
}