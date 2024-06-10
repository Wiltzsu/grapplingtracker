<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Category.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';

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
$createTechniqueController = new CreateTechniqueController($db);
$createCategoryController = new CreateCategoryController($db);
$createPositionController = new CreatePositionController($db);

/**
 * Check if form is submitted and retrieve input data.
 * '??' provides an empty default string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitTechnique'])) {
            $techniqueName = $_POST['techniqueName'] ?? '';
            $techniqueDescription = $_POST['techniqueDescription' ?? ''];
            $categoryID = $_POST['categoryID' ?? ''];
            $positionID = $_POST['positionID' ?? ''];
            $difficultyID = $_POST['difficultyID' ?? ''];
        
            /**
             * Executes the creation of a technique.
             * If no errors, redirect to 'addnew' page.
             */
            $errors = $createTechniqueController->createTechnique(
                $techniqueName,
                $techniqueDescription,
                $categoryID,
                $positionID,
                $difficultyID
            );
        
            if (empty($errors)) {
                header("Location: /technique-db-mvc/view/add_new.php");
                exit();
            }
    } elseif (isset($_POST['submitCategory'])) {
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
    } elseif (isset($_POST['submitPosition'])) {
            $positionName = $_POST['positionName'];
            $positionDescription = $_POST['positionDescription'];
    
            $errors = $createPositionController->createPosition($positionName, $positionDescription);
    
            if (empty($errors)) {
                header("Location: /technique-db-mvc/view/add_new.php");
                exit();
            }
        }
    }


