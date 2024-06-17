<?php
class TrainingClass
{
    private $_db;
    private $_userID;
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

    public function addTrainingClass($userID,
        $instructor,
        $location,
        $date,
        $classDescription)
    {
        $this->_userID = $userID;
        $this->_instructor = $instructor;
        $this->_location = $location;
        $this->_date = $date;
        $this->_classDescription = $classDescription;

        $query = "INSERT INTO Class (
            userID, instructor, location, date, classDescription
        ) VALUES (
            :userID, :instructor, :location, :date, :classDescription
        )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            "userID",
            $this->_userID, PDO::PARAM_INT
        );
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

    public function readTrainingClasses($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT * FROM Class WHERE userID = :userID";
        $statement = $this->_db->prepare($query);

        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);

        $statement->execute();

        $class_array = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $class_array;
    }
}