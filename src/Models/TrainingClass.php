<?php
namespace App\Models;

use PDO;

class TrainingClass
{
    private $db;
    private $userID;
    private $instructor;
    private $location;
    private $duration;
    private $classDate;
    private $classDescription;
    private $rounds;
    private $roundDuration;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTrainingClasses($userID)
    {
        $statement = $this->db->prepare("SELECT * FROM Class WHERE userID = :userID");
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validateCreateNewClass($instructor, $location, $duration, $date, $description)
    {
        $errors = [];

        if (empty($instructor)) {
            $errors['instructor'] = 'Instructor field cannot be empty.';
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $instructor)) {
            $errors['instructor'] = 'Instructor name can only contain letters and spaces.';
        }

        if (empty($location)) {
            $errors['location'] = 'Location field cannot be empty.';
        } else if (!preg_match("/^[a-zA-Z0-9\s]+$/", $location)) {
            $errors['location'] = 'Location can only contain letters, numbers, and spaces.';
        }

        if (empty($duration)) {
            $errors['duration'] = 'Duration field cannot be empty.';
        } else if (!filter_var($duration, FILTER_VALIDATE_INT) || $duration <= 0 || $duration > 480) {
            $errors['duration'] = 'Duration must be a positive integer and less than 480 minutes.';
        } 

        if (empty($date)) {
            $errors['classDate'] = 'Choose a date.';
        }

        if (empty($description)) {
            $errors['classDescription'] = 'Description field cannot be empty.';
        } else if (strlen($description) > 1000) {
            $errors['classDescription'] = 'Description must not exceed 1000 characters.';
        }

        return $errors;
    }
    
    public function createNewClass(
        $userID,
        $instructor,
        $location,
        $duration,
        $classDate,
        $classDescription,
        $rounds,
        $roundDuration
    ) {
        $this->userID = $userID;
        $this->instructor = $instructor;
        $this->location = $location;
        $this->duration = $duration;
        $this->classDate = $classDate;
        $this->classDescription = $classDescription;
        $this->rounds = $rounds;
        $this->roundDuration = $roundDuration;

        $query = "INSERT INTO Class (
            userID, instructor, location, classDuration, classDate, classDescription, rounds, roundDuration
        ) VALUES (
            :userID, :instructor, :location, :classDuration, :classDate, :classDescription, :rounds, :roundDuration
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":userID",
            $this->userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":instructor",
            $this->instructor, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":location",
            $this->location, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDuration",
            $this->duration, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":classDate",
            $this->classDate, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDescription",
            $this->classDescription, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":rounds",
            $this->rounds, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":roundDuration",
            $this->roundDuration, PDO::PARAM_INT
        );
        $statement->execute();
        return [];
    }

    public function countMatTime($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)/60.0 AS totalDurationInHours
                  FROM Class
                  WHERE userID = :userID";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID,PDO::PARAM_INT);

        $statement->execute();

        // Fetching only the first column from the result, which should be the sum of classDuration
        $total_mat_time = $statement->fetchColumn();

        return $total_mat_time;
    }

    public function countMatTimeMonthly($userID) 
    {
        $query = "SELECT MONTH(classDate) as month, SUM(classDuration)/60.0 AS hours
                  FROM Class
                  WHERE userID = :userID AND YEAR(classDate) = YEAR(CURDATE())
                  GROUP BY MONTH(classDate)
                  ORDER BY MONTH(classDate)";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
