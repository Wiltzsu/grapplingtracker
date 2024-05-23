<?php
namespace App\Controller;

use App\Model\Category;
use PDO;
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

/**
 * CategoryController Class.
 * Handles fetching the categories from the model and passing it to index.
 */
class CategoryController 
{
    /**
     * @var Category Instance of the Category model.
     */
    private $category;

    /**
     * Constructor method for the class initialized with a database connection.
     * 
     * @param PDO $db Database connection
     */
    public function __construct($db) {

        /**
         * Initialize the 'category' property to hold an instance of the 'Category' 
         * model passing the database connection to it
         */
        $this->category = new Category($db);
    }

    /**
     * Calls the 'getAllCatgories on the Category model to fetch all items.
     * 
     * @return array An associative array of categories.
     */
    public function getCategories() 
    {
        return $this->category->getAllCategories();
    }
}
?>
