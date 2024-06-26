<?php

namespace App\Models;

use PDO;

class Category
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getCategories()
    {
        $statement = $this->db->prepare("SELECT * FROM Category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}