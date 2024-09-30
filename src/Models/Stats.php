<?php
/**
 * This file contains the Stats class.
 * 
 * PHP version 8.0
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
 * Stats class.
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
class Stats
{
    private $db;
    private $userID;

    /**
     * Constructor function for Stats.
     * 
     * @param PDO $db Database connection
     */
    public function __construct(PDO $db)
    {
        $this->userID = $_SESSION['userID'];
        $this->db = $db;
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
     * Counts weekly mat time for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total mat time formatted as 'X hours Y minutes'
     */
    public function countMatTimeWeekly($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)
                  FROM Class
                  WHERE userID = :userID
                  AND classDate >= CURDATE() - INTERVAL 7 DAY";

        return $this->calculateDuration($query, $userID);
    }

    /**
     * Counts monthly mat time for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total mat time formatted as 'X hours Y minutes'
     */
    public function countMatTimeMonthly($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)
                  FROM Class
                  WHERE userID = :userID
                  AND classDate >= CURDATE() - INTERVAL 30 DAY";
                  
        return $this->calculateDuration($query, $userID);
    }

    /**
     * Counts biannual mat time for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total mat time formatted as 'X hours Y minutes'
     */
    public function countMatTimeBiannual($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)
                  FROM Class
                  WHERE userID = :userID
                  AND classDate >= CURDATE() - INTERVAL 180 DAY";
        
        return $this->calculateDuration($query, $userID);
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
    
        return $this->calculateDuration($query, $userID);
    }

    /**
     * Count time spent rolling weekly for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total round time formatted as 'X hours Y minutes'
     */
    public function countRoundDurationWeekly($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds * roundDuration) AS TotalRollingTimeWeekly
                FROM Class
                WHERE userID = :userID
                AND classDate >= CURDATE() - INTERVAL 7 DAY";

        return $this->calculateDuration($query, $userID);
    }

    /**
     * Count time spent rolling monthly for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total round time formatted as 'X hours Y minutes' 
     */
    public function countRoundDurationMonthly($userID)
    {
        $userID = $_SESSION['userID']; 

        $query = "SELECT SUM(rounds * roundDuration) AS TotalRollingTimeMonthly
                FROM Class
                WHERE userID = :userID
                AND classDate >= CURDATE() - INTERVAL 30 DAY";

        return $this->calculateDuration($query, $userID);
    }

    /**
     * Count time spent rolling biannually for a user.
     * 
     * @param int $userID User ID
     * 
     * @return string Total round time formatted as 'X hours Y minutes'
     */
    public function countRoundDurationBiannual($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds * roundDuration) AS TotalRollingTimeMonthly
        FROM Class
        WHERE userID = :userID
        AND classDate >= CURDATE() - INTERVAL 180 DAY";

        return $this->calculateDuration($query, $userID);
    }

    /**
     * Count total time of rounds rolled for a user.
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

        return $this->calculateDuration($query, $userID);
    }

    /**
     * Count amount of rounds weekly for a user.
     * 
     * @param int $userID Usr ID
     * 
     * @return int
     */
    public function countRoundsWeekly($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds) as totalRoundsWeekly
                FROM Class
                WHERE userID = :userID
                AND classDate >= CURDATE() - INTERVAL 7 DAY";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        $total_rounds_weekly = $statement->fetchColumn();
        return $total_rounds_weekly;
    }

    /**
     * Count amount of rounds monthly for a user.
     * 
     * @param int $userID User ID
     * 
     * @return int
     */
    public function countRoundsMonthly($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds) as totalRoundsMonthly
                FROM Class
                WHERE userID = :userID
                AND classDate >= CURDATE() - INTERVAL 30 DAY";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        $total_rounds_monthly = $statement->fetchColumn();
        return $total_rounds_monthly;
    }

    /**
     * Count amount of rounds biannually for a user.
     * 
     * @param int $userID User ID
     * 
     * @return int
     */
    public function countRoundsBiannual($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(rounds) as totalRoundsMonthly
        FROM Class
        WHERE userID = :userID
        AND classDate >= CURDATE() - INTERVAL 180 DAY";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        $total_rounds_biannual = $statement->fetchColumn();
        return $total_rounds_biannual;
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
}