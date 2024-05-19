<?php
// /controller/categoryController.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'model/categoryModel.php';

class CategoryController {
    private $category;

    public function __construct($db) {
        $this->category = new Category($db);
    }

    public function index() {
        $categories = $this->category->getAllCategories();

        // Pass categories to the view
        require 'view/AddTechniqueView.php';
    }
}
?>
