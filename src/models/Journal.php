<?php
/**
 * Model for interacting with the 'Journal' page.
 * 
 * @package techniquedbmvc
 * @author  William
 * @license MIT License
 */

/**
 * Class Journal
 * Handles operations on the '/journal' page.
 */
class Journal
{
    private $_db;
    private $_techniqueID;
    private $_classID;
    private $_userID;
    
    /**
     * Initializes the constructor with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }


    public function addTechniqueClass(
        $techniqueID,
        $classID,
        $userID
    ) {
        $this->_techniqueID = $techniqueID;
        $this->_classID = $classID;
        $this->_userID = $userID;

        $query = "INSERT INTO Techniques_Classes (
            techniqueID, classID, userID
        ) VALUES (
            :techniqueID, :classID, :userID
        )";

        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":techniqueID",
            $this->_techniqueID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":classID",
            $this->_classID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":userID",
            $this->_userID, PDO::PARAM_INT
        );
        $statement->execute();
        return [];
    }

    public function readJournal($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT
        Techniques_Classes.techniqueID,
        Technique.techniqueName,
        Class.userID,
        Class.instructor,
        Class.classDescription,
        journalNoteDate

        FROM Techniques_Classes 
        
        INNER JOIN Technique
        ON Techniques_Classes.techniqueID = Technique.techniqueID
        INNER JOIN Class
        ON Techniques_Classes.classID = Class.classID
        
        WHERE Class.userID = :userID
        
        ORDER BY journalNoteDate DESC";

        $statement = $this->_db->prepare($query);

        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);

        $statement->execute();

        $techniques_classes_array = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $techniques_classes_array;
    }
}