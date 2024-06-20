<?php
class beltLevel
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function updateBeltLevel($userID, $beltID, $graduation_date) 
    {
        $userID = $_SESSION['userID'];
    
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

    public function timeOnBeltLevel()
    {
        $query = "
            SELECT 
                UB1.userID,
                UB1.beltID,
                BL.color,
                UB1.graduation_date AS start_date,
                COALESCE(MIN(UB2.graduation_date), CURDATE()) AS end_date,
                DATEDIFF(COALESCE(MIN(UB2.graduation_date), CURDATE()), UB1.graduation_date) AS days_on_belt
            FROM 
                User_Belt UB1
            INNER JOIN 
                Belt_Level BL ON UB1.beltID = BL.beltID 
            LEFT JOIN 
                User_Belt UB2 ON UB1.userID = UB2.userID AND UB2.graduation_date > UB1.graduation_date
            WHERE UB1.userID = :userID
            GROUP BY 
                UB1.userID, UB1.beltID, UB1.graduation_date
            ORDER BY 
                UB1.userID, UB1.graduation_date;
        ";
    
        $stmt = $this->_db->prepare($query);
        $stmt->bindParam(':userID', $_SESSION['userID'], PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}