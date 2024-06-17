<?php
/**
 * This file contains methods regarding techniques.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

/** 
 * Class Technique.
 * Methods for validating input and adding techniques.
 */
class Technique
{
    /**
     * Variables for methods.
     * 
     * @var $_db                    Database connection.
     * @var $_techniqueName         Technique name.
     * @var $_techniqueDescription  Technique description.
     * @var $_categoryID            Category ID.
     * @var $_positionID            Position ID.
     * @var $_difficultyID          Difficulty ID.
     */
    private $_db;
    private $_userID;
    private $_techniqueName;
    private $_techniqueDescription;
    private $_categoryID;
    private $_positionID;
    private $_difficultyID;

    /**
     * Initialize with a database connection. 
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates the input parameters for creating a new technique.
     * Checks each parameter to ensure it is not empty.
     * Checks if technique already exists.
     * 
     * Further validations can be added to check for data types or 
     * format constraints.
     * 
     * @param string $techniqueName Name of the technique.
     * @param int    $categoryID    The ID of the category.
     * @param int    $positionID    The ID of the position.
     * @param int    $difficultyID  The ID of the difficulty.
     * 
     * @return array Array of error messages, empty if valid.
     */
    private function _validateInput(
        $techniqueName,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        $errors = [];
        if (empty($techniqueName) 
            || empty($categoryID) 
            || empty($positionID) 
            || empty($difficultyID)
        ) {
            $errors['empty_field'] = 'Field cannot be empty.';
        }

        $techniqueExists = $this->_db->prepare(
            "SELECT 1 FROM Technique WHERE techniqueName = ?"
        );
        $techniqueExists->execute([$techniqueName]);
        if ($techniqueExists->fetch(PDO::FETCH_ASSOC)) {
            $errors['techniqueExists'] = 'Technique name is already used.';
        }
        return $errors;
    }

    /**
     * Adds a new technique to database if input validation passes.
     * 
     * @param int    $userID               User ID.
     * @param string $techniqueName        Name of the technique.
     * @param string $techniqueDescription Description of the technique.
     * @param int    $categoryID           Technique category.
     * @param int    $positionID           Technique position.
     * @param int    $difficultyID         Technique difficulty.
     * 
     * @return array Empty if successful, errors if not.
     */
    public function addTechnique(
        $userID,
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        $this->_userID = $userID;
        $this->_techniqueName = $techniqueName;
        $this->_techniqueDescription = $techniqueDescription;
        $this->_categoryID = $categoryID;
        $this->_positionID = $positionID;
        $this->_difficultyID = $difficultyID;
    
        // Validate the input
        $errors = $this->_validateInput(
            $techniqueName,
            $categoryID,
            $positionID,
            $difficultyID
        );
        if (!empty($errors)) {
            return $errors;
        }
    
        // Prepare the SQL query
        $query = "INSERT INTO Technique (
            userID, techniqueName, techniqueDescription,
            categoryID, positionID, difficultyID
        ) VALUES (
            :userID, :techniqueName, :techniqueDescription,
            :categoryID, :positionID, :difficultyID
        )";
    
        $statement = $this->_db->prepare($query);
        $statement->bindParam(
            ":userID", 
            $this->_userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":techniqueName", 
            $this->_techniqueName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":techniqueDescription", 
            $this->_techniqueDescription, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":categoryID", 
            $this->_categoryID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":positionID", 
            $this->_positionID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":difficultyID", 
            $this->_difficultyID, PDO::PARAM_INT
        );
    
        // Execute the query
        $statement->execute();
    
        return []; // Indicate success
    }
    

    /**
     * Fetch techniques from database.
     * Using 'userID' session to fetch only techniques added by
     * the user.
     * 
     * @param $userID User id.
     * 
     * @return Array  Return array of techniques.
     */
    public function readTechniques($userID)
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
        WHERE Technique.userID = :userID ORDER BY techniqueID DESC";
        $statement = $this->_db->prepare($query);
    
        // Bind the userID to the placeholder
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    
        // Execute the statement
        $statement->execute();
    
        // Fetch all results
        $techniqueArray = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $techniqueArray;
    }

    /**
     * Deletes technique from the database.
     * 
     * @return null Returns null if 'techniqueID' is not set.
     */
    public function deleteTechnique()
    {
        if (isset($_POST['techniqueID'])) {
            if (isset($_POST['deleteTechnique'])) {
                // Assign the 'techniqueID' value from the form to a variable
                $techniqueID = $_POST['techniqueID'];

                $query = "DELETE FROM Technique WHERE techniqueID=:techniqueID";

                $delete = $this->_db->prepare($query);

                $delete->bindValue(':techniqueID', $techniqueID, PDO::PARAM_INT);

                $delete->execute();
                header("Location: /technique-db-mvc/viewitems");
                exit();
            }
        }
    }
}