<?php

namespace App\Models;

use PDO;

class Technique
{
    private $db;
    private $userID;
    private $techniqueName;
    private $techniqueDescription;
    private $categoryID;
    private $positionID;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTechniques($userID)
    {
        $userID = $_SESSION['userID'];
    
        $query = "SELECT 
        User.userID, 
        techniqueID, 
        techniqueName, 
        techniqueDescription, 
        Category.categoryID,
        Position.positionID
        
        FROM Technique
        
        INNER JOIN User ON Technique.userID = User.userID
        INNER JOIN Category ON Technique.categoryID = Category.categoryID
        INNER JOIN Position ON Technique.positionID = Position.positionID
        
        WHERE Technique.userID = :userID
        
        ORDER BY techniqueID DESC";

        $statement = $this->db->prepare($query);
        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        // Execute the statement
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validateCreateNewTechnique($techniqueName, $techniqueDescription, $categoryID, $positionID)
    {
        $errors = [];

        if (empty($techniqueName)) {
            $errors['techniqueName'] = 'Insert a technique name.';
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $techniqueName)) {
            $errors['techniqueName'] = 'Technique name can only contain letters and spaces.';
        }

        if (empty($techniqueDescription)) {
            $errors['techniqueDescription'] = 'Insert a description.';
        } else if(!preg_match("/^[a-zA-Z\s]+$/", $techniqueName)) {
            $errors['techniqueDescription'] = 'Technique description can only contain letters and spaces.';
        }

        if (empty($categoryID)) {
            $errors['categoryID'] = 'Choose a category.';
        }

        if (empty($positionID)) {
            $errors['positionID'] = 'Choose a position.';
        }

        return $errors;
    }

    public function createNewTechnique(
        $userID,
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
    ) {
        $this->userID = $userID;
        $this->techniqueName = $techniqueName;
        $this->techniqueDescription = $techniqueDescription;
        $this->categoryID = $categoryID;
        $this->positionID = $positionID;

        // Prepare the SQL query
        $query = "INSERT INTO Technique (
            userID, techniqueName, techniqueDescription,
            categoryID, positionID
        ) VALUES (
            :userID, :techniqueName, :techniqueDescription,
            :categoryID, :positionID
        )";
    
        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":userID", 
            $this->userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":techniqueName", 
            $this->techniqueName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":techniqueDescription", 
            $this->techniqueDescription, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":categoryID", 
            $this->categoryID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":positionID", 
            $this->positionID, PDO::PARAM_INT
        );
    
        // Execute the query
        $statement->execute();
    
        return []; // Indicate success
    }

    public function countTechniques($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT COUNT(techniqueID) AS totalTechniquesLearned
                  FROM Technique
                  WHERE userID = :userID";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);

        $statement->execute();

        $total_techniques = $statement->fetchColumn();

        return $total_techniques;
    }

    public function countTechniquesMonthly($userID)
    {
        $query = "SELECT MONTH(journalNoteDate) as month, COUNT(techniqueID) as count
                FROM Techniques_Classes
                WHERE userID = :userID AND YEAR(journalNoteDate) = YEAR(CURDATE())
                GROUP BY MONTH(journalNoteDate)
                ORDER BY MONTH(journalNoteDate);";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>