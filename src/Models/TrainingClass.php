<?php
/**
 * This file contains User class and its methods.
 * 
 * PHP version 8
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com 
 */
namespace App\Models;
use PDO;

/**
 * This class is the TrainingClass class.
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com 
 */
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

    /**
     * Constructor function for TrainingClass.
     * 
     * @param PDO $db Database connection
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get all training classes for a user.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
    public function getTrainingClasses($userID)
    {
        $statement = $this->db->prepare("SELECT * FROM Class WHERE userID = :userID");
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Validates creation of a new class.
     * 
     * @param string $instructor  Instructor name
     * @param string $location    Location
     * @param int    $duration    Duration in minutes
     * @param string $date        Date
     * @param string $description Description
     * 
     * @return array
     */
    public function validateCreateNewClass($instructor, $location, $duration, $date, $description): array
    {
        $errors = [];

        if (empty($instructor)) {
            $errors['instructor'] = 'Instructor field cannot be empty.';
        } else if (strlen($instructor) > 50) {
            $errors['instructor'] = 'Instructor name is too long.';
        }

        if (empty($location)) {
            $errors['location'] = 'Location field cannot be empty.';
        } else if (strlen($location) > 100) {
            $errors['location'] = 'Location name is too long.';
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
    
    /**
     * Creates a new class.
     * 
     * @param int    $userID           User ID
     * @param string $instructor       Instructor name
     * @param string $location         Location
     * @param int    $duration         Duration in minutes
     * @param date   $classDate        Date
     * @param string $classDescription Description
     * @param int    $rounds           Rounds
     * @param int    $roundDuration    Round duration in seconds
     * 
     * @return array
     */
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
        $statement->bindParam(":userID", $this->userID, PDO::PARAM_INT);
        $statement->bindParam(":instructor", $this->instructor, PDO::PARAM_STR);
        $statement->bindParam(":location", $this->location, PDO::PARAM_STR);
        $statement->bindParam(":classDuration", $this->duration, PDO::PARAM_INT);
        $statement->bindParam(":classDate", $this->classDate, PDO::PARAM_STR);
        $statement->bindParam(":classDescription", $this->classDescription, PDO::PARAM_STR);
        $statement->bindParam(":rounds", $this->rounds, PDO::PARAM_INT);
        $statement->bindParam(":roundDuration", $this->roundDuration, PDO::PARAM_INT);
        $statement->execute();
        return [];
    }

    /**
     * Helper function to calculate duration.
     * 
     * @param string $query  Query
     * @param int    $userID User ID
     * 
     * @return string
     */
    private function calculateDuration($query, $userID): string
    {
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
    
        // Fetching the total minutes directly from the query
        $total_minutes = $statement->fetchColumn();
        $total_minutes = (float) $total_minutes;
    
        if ($total_minutes) {
            // Calculate total hours and remaining minutes
            $total_hours = floor($total_minutes / 60);
            $remaining_minutes = $total_minutes % 60;
    
            return $total_hours . ' hours ' . (int) $remaining_minutes . ' minutes';
        } else {
            return '0 hours 0 minutes'; // Return this if no mat time is recorded
        }
    }

    /**
     * Counts total mat time for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total mat time formatted as 'X hours Y minutes'
     */
    public function countMatTime($userID): string
    {
        $userID = $_SESSION['userID'];
    
        // Ensure the query sums the duration as minutes directly
        $query = "SELECT SUM(classDuration) AS totalMinutes
                  FROM Class
                  WHERE userID = :userID";
    
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
    
        // Fetching the total minutes directly from the query
        $total_minutes = $statement->fetchColumn();
        $total_minutes = (float) $total_minutes;
    
        if ($total_minutes) {
            // Calculate total hours and remaining minutes
            $total_hours = floor($total_minutes / 60);
            $remaining_minutes = $total_minutes % 60;
    
            return $total_hours . ' hours ' . (int) $remaining_minutes . ' minutes';
        } else {
            return '0 hours 0 minutes'; // Return this if no mat time is recorded
        }
    }

    /**
     * Count total time of rounds for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total round time formatted as 'X hours Y minutes'
     */
    public function countRoundDuration($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds * roundDuration) AS TotalRollingTime
                  FROM Class
                  WHERE userID = :userID";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        $total_minutes = $statement->fetchColumn();
        $total_minutes = (float) $total_minutes;

        if ($total_minutes) {
            $total_hours = floor($total_minutes / 60);
            $remaining_minutes = $total_minutes % 60;

            return $total_hours . ' hours ' . (int) $remaining_minutes . ' minutes';
        } else {
            return '0 hours 0 minutes';
        }
    }

    
    /**
     * Count total amount of rounds for a user.
     * 
     * @param int $userID User ID
     * 
     * @return int
     */
    public function countRounds($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds) as totalRounds
                  FROM Class
                  WHERE userID = :userID";
        
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);

        $statement->execute();

        $total_rounds = $statement->fetchColumn();

        return $total_rounds;
    }

    /**
     * Counts mat time monthly for a user.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
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
