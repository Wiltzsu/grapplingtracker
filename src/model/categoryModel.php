<?php
/**
 * Category model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William Lönnberg <william.lonnberg@gmail.com>
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
     * @var PDO Database connection, ensures that $_db is always an instance of PDO.
     * '@var' is used to specify the type of a class property.
     */
    private PDO $_db;

    /**
     * Constructor method for the class initialized with database connection.
     * Can only be called with an instance of PDO
     * 
     * @param PDO $db Database connection
     * '@param' is used to specify the type and purpose of a method parameter.
     */
    public function __construct(PDO $db)
    {
        $this->_db = $db;
    }

    /**
     * Fetches all categories from the 'Category' table.
     * 
     * @return array Associative array of categories.
     */
    public function getAllCategories(): array
    {
        $statement = $this->_db->prepare("SELECT * FROM Category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
