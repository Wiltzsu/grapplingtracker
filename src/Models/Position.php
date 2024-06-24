<?php
class Position§
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
}