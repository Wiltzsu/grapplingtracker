<?php
namespace App\Config;

use PDO;
/**
 * Database connection
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

 /**
  * Database connection class. Provides a method to connect to a database using PDO.
  */
class Database
{
    /**
     * Establishes and returns a PDO connection to the database.
     * Ensures the database exists and sets a default client character set.
     * 
     * @return PDO A PDO database connection object.
     */
    public static function connect(): PDO
    {
        $db = new PDO('mysql:host=localhost;dbname=journaldb', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("CREATE DATABASE IF NOT EXISTS journaldb DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
        $db->exec("USE journaldb;");
        return $db;
    }
}
