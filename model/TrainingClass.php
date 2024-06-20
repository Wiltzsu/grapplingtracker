<?php
class TrainingClass
{
    private $_db;
    private $_userID;
    private $_instructor;
    private $_location;
    private $_duration;
    private $_date;
    private $_classDescription;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function addTrainingClass(
        $userID,
        $instructor,
        $location,
        $duration,
        $date,
        $classDescription)
    {
        $this->_userID = $userID;
        $this->_instructor = $instructor;
        $this->_location = $location;
        $this->_duration = $duration;
        $this->_date = $date;
        $this->_classDescription = $classDescription;

        $query = "INSERT INTO Class (
            userID, instructor, location, classDuration, date, classDescription
        ) VALUES (
            :userID, :instructor, :location, :classDuration, :date, :classDescription
        )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":userID",
            $this->_userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":instructor",
            $this->_instructor, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":location",
            $this->_location, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDuration",
            $this->_duration, PDO::PARAM_INT
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

    public function deleteTrainingClass()
    {
        if (isset($_POST['classID'])) {
            if (isset($_POST['deleteTrainingClass'])) {
                // Assign the 'classID' value from the form to a variable
                $classID = $_POST['classID'];

                $query = "DELETE FROM Class WHERE classID=:classID";

                $delete = $this->_db->prepare($query);

                $delete->bindValue(':classID', $classID, PDO::PARAM_INT);

                $delete->execute();
                header("Location: /technique-db-mvc/viewitems");
                exit();
            }
        }
    }

    public function countMatTime($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)/60.0 AS totalDurationInHours
                  FROM Class
                  WHERE userID = :userID";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(':userID', $userID,PDO::PARAM_INT);

        $statement->execute();

        // Fetching only the first column from the result, which should be the sum of classDuration
        $total_mat_time = $statement->fetchColumn();

        return $total_mat_time;
    }
}
