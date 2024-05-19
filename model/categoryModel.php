<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Category {
    private $db;

    public function __construct($db) {
        $this->db = $db; // Corrected property assignment
    }

    public function getAllCategories() {
        $statement = $this->db->prepare("SELECT * FROM Category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
