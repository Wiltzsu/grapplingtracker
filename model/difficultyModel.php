<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Difficulty {
    private $db;

    // Constructor to initialize the database connection
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Method to fetch items from database
    public function getAllDifficulties() {
        $statement = $this->db->prepare("SELECT * FROM Difficulty");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}