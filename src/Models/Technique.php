<?php

namespace App\Models;

use PDO;

class Technique
{
    private $db;

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
        Category.categoryName,
        Difficulty.difficulty, 
        Position.positionName
        
        FROM Technique
        
        INNER JOIN User
        ON Technique.userID = User.userID
        INNER JOIN Category
        ON Technique.categoryID = Category.categoryID
        INNER JOIN Difficulty
        ON Technique.difficultyID = Difficulty.difficultyID
        INNER JOIN Position
        ON Technique.positionID = Position.positionID
        
        WHERE Technique.userID = :userID
        
        ORDER BY techniqueID DESC";

        $statement = $this->db->prepare($query);
    
        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    
        // Execute the statement
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>