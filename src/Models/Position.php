<?php

namespace App\Models;

use PDO;
class Position
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getPositions()
    {
        $statement = $this->db->prepare("SELECT * FROM Position");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}