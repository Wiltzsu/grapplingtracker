<?php
class beltLevel
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function updateBeltLevel($userID, $beltID, $graduation_date) {
        $userID = $_SESSION['userID']; // Ensure the userID is fetched from the session securely
    
        // SQL to insert or update user's belt level information
        $query = "INSERT INTO User_Belt (userID, beltID, graduation_date) VALUES (:userID, :beltID, :graduation_date)
                  ON DUPLICATE KEY UPDATE beltID = VALUES(beltID), graduation_date = VALUES(graduation_date)";
        $stmt = $this->_db->prepare($query);
    
        // Correctly binding parameters using PDO
        $stmt->bindParam(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindParam(':beltID', $beltID, PDO::PARAM_INT);
        $stmt->bindParam(':graduation_date', $graduation_date, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return [];
    }
    
}