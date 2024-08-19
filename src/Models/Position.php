<?php
/**
 * This file contains the Position model.
 * 
 * PHP version 8.0.0
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
 * The Position model.
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@mail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
class Position
{
    private $db;
    private $positionName;
    private $positionDescription;

    /**
     * Constructor for the Position model.
     * 
     * @param PDO $db The database connection.
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get all positions from the database.
     * 
     * @return array An array of all positions.
     */
    public function getPositions()
    {
        $statement = $this->db->prepare("SELECT * FROM Position");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Validate the input for creating a new position.
     * 
     * @param string $positionName        The name of the position.
     * @param string $positionDescription The description of the position.
     * 
     * @return array An array of errors.
     */
    public function validateCreatePosition($positionName, $positionDescription): array
    {
        $errors = [];

        if (empty($positionName)) {
            $errors['positionName'] = 'Add a name for the position.';
        } else if (strlen($positionName) > 50) {
            $errors['positionName'] = 'Position name is too long.';
        }

        if (empty($positionDescription)) {
            $errors['positionDescription'] = 'Add a description for the position.';
        } else if (strlen($positionDescription) > 255) {
            $errors['positionDescription'] = 'Position description is too long.';
        }

        return $errors;
    }

    /**
     * Create a new position in the database.
     * 
     * @param string $positionName        The name of the position.
     * @param string $positionDescription The description of the position.
     * 
     * @return bool True if the position was created, false otherwise.
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