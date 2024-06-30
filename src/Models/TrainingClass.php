<?php
namespace App\Models;

use PDO;
use DateTime;

class TrainingClass
{
    private $db;
    private $userID;
    private $instructor;
    private $location;
    private $duration;
    private $classDate;
    private $classDescription;

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

    public function validateAddTrainingClass($instructor, $location, $duration, $date, $description)
    {
        $errors = [];
        // Check for empty fields
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
    
    public function addTrainingClass(
        $userID,
        $instructor,
        $location,
        $duration,
        $classDate,
        $classDescription)
    {
        $this->userID = $userID;
        $this->instructor = $instructor;
        $this->location = $location;
        $this->duration = $duration;
        $this->classDate = $classDate;
        $this->classDescription = $classDescription;

        $errors = $this->validateAddTrainingClass($instructor, $location, $duration, $classDate, $classDescription);
        if (!empty($errors)) {
            return $errors;  // Return validation errors
        }
        var_dump($instructor, $location, $duration, $classDate, $classDescription);

        $query = "INSERT INTO Class (
            userID, instructor, location, classDuration, classDate, classDescription
        ) VALUES (
            :userID, :instructor, :location, :classDuration, :classDate, :classDescription
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
        $statement->execute();
        return [];
    }
}
?>
