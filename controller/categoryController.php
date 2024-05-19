<?php
// /controller/categoryController.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'model/categoryModel.php';

class CategoryController {
    // A private property that will hold the instance of the Category model
    private $category;

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
