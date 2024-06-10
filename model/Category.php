<?php
/**
 * Model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William
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
    private $_db;
    private $_categoryName;
    private $_categoryDescription;

    /**
     * Initializes the constructor with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * Validates the input parameters for creating a new category.
     * Checks each parameter to ensure its not empty.
     * 
     * @param string $categoryName        Name of the category.
     * @param string $categoryDescription Description of the category.
     * 
     * @return Array Array of error messages, empty if valid.
     */
    private function _validateInput(
        $categoryName,
        $categoryDescription
    ) {
        $errors = [];
        if (empty($categoryName) 
            || empty($categoryDescription)
        ) {
            $errors['emptyField'] = 'Field cannot be empty.';
        }

        return $errors;
    }

    /**
     * Add a new category to the database if input validation passes.
     * 
     * @param string $categoryName        Name of the category.
     * @param string $categoryDescription Description of the category.
     * 
     * @return array Empty if successful, errors if not.
     */
    public function addCategory($categoryName, $categoryDescription)
    {
        $this->_categoryName = $categoryName;
        $this->_categoryDescription = $categoryDescription;

        $errors = $this->_validateInput($categoryName, $categoryDescription);

        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Category (categoryName, categoryDescription) VALUES (:categoryName, :categoryDescription)";
        $statement = $this->_db->prepare($query);
        $statement->bindParam(":categoryName", $this->_categoryName, PDO::PARAM_STR);
        $statement->bindParam(":categoryDescription", $this->_categoryDescription, PDO::PARAM_STR);
        $statement->execute();
        return [];
    }
}
?>
