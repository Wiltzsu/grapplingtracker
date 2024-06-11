<?php
require_once 'CreateCategoryController.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';

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
        $userID = $_POST['userID'];//$_SESSION['userID']; // Ensure you have this session variable set upon login
        $techniqueName = $_POST['techniqueName'];
        $techniqueDescription = $_POST['techniqueDescription'];
        $categoryID = $_POST['categoryID'];
        $positionID = $_POST['positionID'];
        $difficultyID = $_POST['difficultyID'];
    
        // Call the add technique method
        $errors = $createTechniqueController->createTechnique(
            $userID,
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

