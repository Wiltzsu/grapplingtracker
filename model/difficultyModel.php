<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Difficulty {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllDifficulties() {
        $statement = $this->db->prepare("SELECT * FROM Difficulty");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}