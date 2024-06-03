<?php
/**
 * Handles web requests related to the category management by interacting
 * with the Category model.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

include_once '../Models/CategoryModel.php';
use PDO;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Manages the category data for the application.
 * 
 * This controller handles operations such as fetching all categories
 * from the database and passing them to the appropriate view.
 */
class CategoryController
{
    /**
     * @var Category Instance of the Category model.
     */
    private $_category;

    /**
     * Initializes the controller with a database connection.
     * 
     * @param PDO $db Database connection
     */
    public function __construct(PDO $db)
    {

        /**
         * Initialize the 'category' property to hold an instance of the 'Category' 
         * model passing the database connection to it
         */
        $this->_category = new CategoryModel($db);
    }

    /**
     * Calls the 'getAllCatgories on the Category model to fetch all items.
     * 
     * @return array An associative array of categories.
     */
    public function getCategories(): array
    {
        return $this->_category->getAllCategories();
    }
}
?>
