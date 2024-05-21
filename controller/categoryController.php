<?php
/**
 * Controller category for interacting with the difficulty model and index.
 * 
 * @package Techniquedbmvc
 * @author  William Lönnberg <william.lonnberg@gmail.com>
 * @license MIT License
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './config/database.php';
require_once './model/categoryModel.php';

// Create a CategoryController using the factory.

/**
 * CategoryController Class.
 * Handles fetching the categories from the model and passing it to index.
 */
class CategoryController {
    // A private property that will hold the instance of the Category model.
    private $category;

    /**
     * Constructor method for the class initialized with a database connection.
     * 
     * @param PDO $db Database connection
     */
    public function __construct($db) {
        // Initialize the 'category' property to hold an instance of the 'Cateogry' model passing the database connection to it
        $this->category = new Category($db);
    }

    public function getCategories() {
        // Calls the 'getAllCategories' on the category model to fetch all categories
        return $this->category->getAllCategories();
    }
}
?>
