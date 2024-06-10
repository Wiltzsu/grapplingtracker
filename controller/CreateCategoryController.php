<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Category.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class CreateCategoryController
{
    private $_categoryModel;

    /**
     * Initialize with a database connection.
     */
    public function __construct($db)
    {
        $this->_categoryModel = new Category($db);
    }

    /**
     * Uses the instance of the category model and adds the category to the database.
     * 
     * @param string $categoryName          Name of the category.
     * @param string $categoryDescription   Category description.
     * 
     * @return Array Returns an empty array if successful or an array containing errors.
     */
    public function createCategory(
        $categoryName,
        $categoryDescription)
    {
        return $this->_categoryModel->addCategory(
            $categoryName,
            $categoryDescription
        );
    }
}

/**
 * Initialize empty arrays to store errors and input data.
 */
$errors = [
    'emptyField' => ''
];

$input = [
    'categoryName' => '',
    'categoryDescription' => ''
];

/**
 * Initialize the database connection.
 * Instantiate the class.
 */
$db = Database::connect();
$createCategoryController = new CreateCategoryController($db);

/**
 * Check if form is submitted and retrieve input data.
 * '??' provides an empty default string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];

    /**
     * Execute the function.
     * If no errors, redirect to 'addnew' page.
     */
    $errors = $createCategoryController->createCategory(
        $categoryName,
        $categoryDescription
    );

    if (empty($errors)) {
        header("Location: /technique-db-mvc/view/add_new.php");
        exit();
    }
}