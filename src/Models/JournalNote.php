<?php

namespace App\Models;

use PDO;

class JournalNote
{
    private $db;
    private $techniqueID;
    private $classID;
    private $userID;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTechniquesClasses($userID)
    {
        $userID = $_SESSION['userID'];

        // Correct SQL query string
        $query = "SELECT
            User.userID, 
            Technique.techniqueName,
            Class.instructor,
            Techniques_Classes.journalNoteDate
                
            FROM Techniques_Classes
    
            INNER JOIN User ON Techniques_Classes.userID = User.userID
            INNER JOIN Technique ON Techniques_Classes.techniqueID = Technique.techniqueID
            INNER JOIN Class ON Techniques_Classes.classID = Class.classID
                
            WHERE Techniques_Classes.userID = :userID
                
            ORDER BY journalNoteDate DESC";
    
        // Prepare the query using the correct SQL string
        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function validateCreateNewJournalNote($techniqueID, $classID)
    {
        $errors = [];

        if (empty($techniqueID)) {
            $errors['technique'] = "Field cannot be empty.";
        }

        if (empty($classID)) {
            $errors['class'] = "Field cannot be empty.";
        }

        return $errors;
    }

    public function createNewJournalNote(
        $techniqueID,
        $classID,
        $userID
    ) {
        $this->techniqueID = $techniqueID;
        $this->classID = $classID;
        $this->userID = $userID;

        $errors = $this->validateCreateNewJournalNote(
            $techniqueID,
            $classID,
            $userID
        );
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Techniques_Classes (
            techniqueID, classID, userID
        ) VALUES (
            :techniqueID, :classID, :userID
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":techniqueID",
            $this->techniqueID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":classID",
            $this->classID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":userID",
            $this->userID, PDO::PARAM_INT
        );

        return $statement->execute();
    }
}