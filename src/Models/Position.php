<?php
/**
 * This file contains Position class and its methods.
 * 
 * PHP version 8
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */

namespace App\Models;
use PDO;

/**
 * This class is the Position class.
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class Position
{
    private $db;
    private $positionName;
    private $positionDescription;

    /**
     * Constructor function for Position.
     * 
     * @param PDO $db Database connection
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get all positions.
     * 
     * @return array
     */
    public function getPositions()
    {
        $statement = $this->db->prepare("SELECT * FROM Position");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Validate create position form.
     * 
     * @param string $positionName        Position name
     * @param string $positionDescription Position description
     * 
     * @return array
     */
    public function validateCreatePosition($positionName, $positionDescription)
    {
        $errors = [];

        if (empty($positionName)) {
            $errors['positionName'] = 'Add a name for the position.';
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $positionName)) {
            $errors['positionName'] = 'Position name can contain only letters and spaces.';
        }

        if (empty($positionDescription)) {
            $errors['positionDescription'] = 'Add a description for the position.';
        } else if (!preg_match("/^[a-zA-Z0-9\s]+$/", $positionDescription)) {
            $errors['positionDescription'] = 'Position description can contain only letters, numbers and spaces.';
        }

        return $errors;
    }

    /**
     * Create a new position.
     * 
     * @param string $positionName        Position name
     * @param string $positionDescription Position description
     * 
     * @return bool
     */
    public function createNewPosition($positionName, $positionDescription) :bool
    {
        $this->positionName = $positionName;
        $this->positionDescription = $positionDescription;

        $query = "INSERT INTO Position (
            positionName, positionDescription
        ) VALUES (
            :positionName, :positionDescription
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":positionName",
            $this->positionName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":positionDescription",
            $this->positionDescription, PDO::PARAM_STR
        );
        
        return $statement->execute();    
    }
}
?>