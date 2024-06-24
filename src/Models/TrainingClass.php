<?php

namespace App\Models;

use PDO;

class TrainingClass {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getTrainingClasses($userID) {
        $stmt = $this->db->prepare("SELECT * FROM Class WHERE userID = :userID");
        $stmt->bindParam(':userID', $userID, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records
    }
}
?>
