<?php
/**
 * Category model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @autor   William Lönnberg <william.lonnberg@gmail.com>
 * @license MIT License
 */

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class Category
 * Handles database operations for the 'Category' table.
 */
class Category
{
    /**
     * @var PDO Database connection
     */
    private $_db;

    /**
     * Initializes the Category model with a database connection.
     * 
     * @param PDO $db Database connection
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Fetches all categories from the 'Category' table.
     * 
     * @return array Associative array of categories
     */
    public function getAllCategories()
    {
        $statement = $this->_db->prepare("SELECT * FROM Category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
