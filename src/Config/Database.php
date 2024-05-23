<?php
namespace App\Config;

use PDO;

class Database {
    public static function connect() {
        $db = new PDO('mysql:host=localhost;dbname=journaldb', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("CREATE DATABASE IF NOT EXISTS test DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
        $db->exec("USE journaldb;");
        return $db;
    }
}
