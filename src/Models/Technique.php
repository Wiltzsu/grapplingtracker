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
    private $classID;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTechniques($userID, $limit = null) :array
    {
        $userID = $_SESSION['userID'];
    
        $query = "SELECT 
            User.userID, 
            Technique.techniqueID, 
            Technique.techniqueName, 
            Technique.techniqueDescription, 
            Category.categoryName,
            Position.positionName,
            Class.location
        FROM Technique
        INNER JOIN User ON Technique.userID = User.userID
        INNER JOIN Category ON Technique.categoryID = Category.categoryID
        INNER JOIN Position ON Technique.positionID = Position.positionID
        LEFT JOIN Class ON Technique.classID = Class.classID
        WHERE Technique.userID = :userID
        ORDER BY techniqueID DESC";

        // Append a limit to the query if it is set
        if ($limit !== null) {
            $query .= " LIMIT :limit";
        }

        $statement = $this->db->prepare($query);
        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);

        if ($limit !== null) {
            $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        }

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
        $classID
    ) {
        $this->userID = $userID;
        $this->techniqueName = $techniqueName;
        $this->techniqueDescription = $techniqueDescription;
        $this->categoryID = $categoryID;
        $this->positionID = $positionID;
        $this->classID = $classID;

        // Prepare the SQL query
        $query = "INSERT INTO Technique (
            userID, techniqueName, techniqueDescription,
            categoryID, positionID, classID
        ) VALUES (
            :userID, :techniqueName, :techniqueDescription,
            :categoryID, :positionID, :classID
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
        // Before binding, check if classID is null and handle appropriately
        if ($this->classID !== null) {
            $statement->bindParam(":classID", $this->classID, PDO::PARAM_INT);
        } else {
            $statement->bindValue(":classID", $this->classID, PDO::PARAM_NULL);
        };
    
        // Execute the query
        $statement->execute();    
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

    public function getTechniquesMonthly($userID)
    {
        $query = "SELECT MONTH(insertDate) as month, COUNT(techniqueID) as count
                  FROM Technique
                  WHERE userID = :userID AND YEAR(insertDate) = YEAR(CURDATE())
                  GROUP BY MONTH(insertDate)
                  ORDER BY MONTH(insertDate);";
    
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getTechniquesPerPosition($userID)
    {
        $query = "SELECT Position.positionName, COUNT(Technique.techniqueID) AS count
        FROM Technique
        JOIN Position ON Technique.positionID = Position.positionID
        WHERE Technique.userID = :userID
        GROUP BY Position.positionName
        ORDER BY Position.positionName;";
                
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteTechnique($techniqueID)
    {
        $query = "DELETE FROM Technique WHERE techniqueID = :techniqueID";
        $delete = $this->db->prepare($query);
        $delete->bindValue(':techniqueID', $techniqueID, PDO::PARAM_INT);
        $delete->execute();

        header('Location: viewitems');
        exit();
    }
}
?>