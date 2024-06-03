<?php
require '../config/config.php';
/**
 * Provides the Database class for establishing connections to the database.
 *
 * This file contains the Database class which is responsible for handling database connections
 * using the PDO extension. It ensures that a connection is established and that the database
 * exists before performing any operations. It sets default character sets and error handling modes.
 * 
 */


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
    public static function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=journaldb", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
    }
}
