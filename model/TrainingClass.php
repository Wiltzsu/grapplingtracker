<?php
/**
 * Model for interacting with the 'Class' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

/**
 * Class 'Class'
 */

class TrainingClass
{
    private $_db;
    private $_instructor;
    private $_location;
    private $_date;
    private $_classDescription;

    /**
     * Inititalize the constructor with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates input parameters when inserting a new class.
     * Checks if inputs are empty.
     * 
     * @param string $instructor      Name of the class instructor.
     * @param string $location        Location of the class.
     * @param date   $date            Date of the class.
     * @param string $classDescrption General description of the class.
     * 
     * @return Array Array of error messages, empty if valid.
     */
    private function _validateInput()
    {
        $errors = [];
        if (empty($instructor) || empty($location) || empty($date)) {
            $errors['empty_field'] = 'Field cannot be empty.';
        }

        return $errors;
    }

    public function addClass($instructor, $location, $date, $classDescrption)
    {
        $this->_instructor = $instructor;
        $this->_location = $location;
        $this->_date = $date;
        $this->_classDescription = $classDescrption;

        $errors = $this->_validateInput($instructor, $location, $date, $classDescrption);

        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Class (
                instructor, location, date, classDescription
            ) VALUES (
                :instructor, :location, :date, :classDescription
            )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":instructor",
            $this->_instructor, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":location",
            $this->_location, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":date",
            $this->_date, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDescription",
            $this->_classDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }
}