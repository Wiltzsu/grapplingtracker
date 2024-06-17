<?php
class TrainingClass
{
    private $_db;
    private $_instructor;
    private $_location;
    private $_date;
    private $_classDescription;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    private function _validateInput($instructor, $location, $date, $classDescription)
    {
        
    }

    public function addClass($instructor, $location, $date, $classDescription)
    {
        $this->_instructor = $instructor;
        $this->_location = $location;
        $this->_date = $date;
        $this->_classDescription = $classDescription;

        $query = "INSERT INTO Class (
            instructor, location, date, classDescription
        ) VALUES (
            :instructor, :location, :date, :classDescription
        )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            "instructor",
            $this->_instructor, PDO::PARAM_STR
        );
        $statement->bindParam(
            "location",
            $this->_location, PDO::PARAM_STR
        );
        $statement->bindParam(
            "date",
            $this->_date, PDO::PARAM_STR
        );
        $statement->bindParam(
            "classDescription",
            $this->_classDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }
}