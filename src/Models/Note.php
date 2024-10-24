<?php
/**
 * This file contains the Note model.
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
 * The Note model.
 * 
 * @category Models
 * @package  App\Models
 * @author   William Lönnberg <william.lonnberg@mail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
class Note
{
    private $db;
    private $userID;
    private $content;

    /**
     * Constructor function for Note.
     * 
     * @param PDO $db Database connection
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Validate quick note.
     * 
     * @param string $content Content
     * 
     * @return array
     */
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

    /**
     * Create a quick note.
     * 
     * @param int    $userID  User ID
     * @param string $content Content
     * 
     * @return void
     */
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

    /**
     * Get all quick notes.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
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

    /**
     * Delete a quick note.
     * 
     * @param int $quicknoteID Quick note ID
     * 
     * @return void
     */
    public function deleteQuickNote($quicknoteID) :void
    {
        $query = "DELETE FROM Quick_Note WHERE quicknoteID = :quicknoteID";
        $delete = $this->db->prepare($query);
        $delete->bindValue(':quicknoteID', $quicknoteID, PDO::PARAM_INT);
        $delete->execute();
    }
}