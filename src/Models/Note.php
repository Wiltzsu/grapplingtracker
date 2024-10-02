<?php

namespace App\Models;

use PDO;

class Note
{
    private $db;
    private $userID;
    private $content;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function validateQuickNote($content)
    {
        $errors = [];

        if (empty($content)) {
            $errors['content'] = 'Please insert something.';
        } else if (strlen($content) > 500) {
            $errors['content'] = 'Content can be max. 500 characters.';
        }

        return $errors;
    }

    public function createQuickNote(
        $userID,
        $content
    ) {
        $this->userID = $userID;
        $this->content = $content;

        // Prepare the SQL query
        $query = "INSERT INTO Quick_Note (
            userID, content
        ) VALUES (
            :userID, :content
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":userID",
            $this->userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":content",
            $this->content, PDO::PARAM_STR
        );
        
        // Execute the query
        $statement->execute();
    }

    public function getQuickNotes($userID) :array
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT * FROM Quick_Note
        WHERE userID = :userID";

        $statement = $this->db->prepare($query);
        //Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        // Execute the statement
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteQuickNote($quicknoteID) :void
    {
        $query = "DELETE FROM Quick_Note WHERE quicknoteID = :quicknoteID";
        $delete = $this->db->prepare($query);
        $delete->bindValue (':quicknoteID', $quicknoteID, PDO::PARAM_INT);
        $delete->execute();

        header('Location: mainview');
        exit();
    }
}