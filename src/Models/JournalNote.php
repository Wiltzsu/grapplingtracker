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

    public function getTechniquesClasses()
    {
        $statement = $this->db->prepare(
            "SELECT * FROM Techniques_Classes
            "
        );
        
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

        $statement->execute();
        return [];
    }
}