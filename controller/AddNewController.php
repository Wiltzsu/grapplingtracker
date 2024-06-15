<?php
/**
 * This file is responsible for checking form submissions,
 * retrieving data and calling the methods to insert
 * new items to the database.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once 'CreateCategoryController.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';

/**
 * Initialize empty arrays to store errors and input data.
 */
$errors = [
    'empty_field' => ''
];

$input = [
    'categoryName' => '',
    'categoryDescription' => ''
];

/**
 * Initialize the database connection.
 * Instantiate the classes with the connection.
 */
$db = Database::connect();
$createTechniqueController = new CreateTechniqueController($db);
$createCategoryController = new CreateCategoryController($db);
$createPositionController = new CreatePositionController($db);

/**
 * Check if form is submitted and retrieve input data.
 * Uses an if-else block to decide which form was submitted.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitTechnique'])) {
        $userID = $_POST['userID'];
        $techniqueName = $_POST['techniqueName'];
        $techniqueDescription = $_POST['techniqueDescription'];
        $categoryID = $_POST['categoryID'];
        $positionID = $_POST['positionID'];
        $difficultyID = $_POST['difficultyID'];
    
        // Call the createTechnique method
        $errors = $createTechniqueController->createTechnique(
            $userID,
            $techniqueName,
            $techniqueDescription,
            $categoryID,
            $positionID,
            $difficultyID
        );
            // If no errors, execute and redirect back to the page.
        if (empty($errors)) {
            header("Location: /technique-db-mvc/view/add_new.php");
            exit();
        }
    } elseif (isset($_POST['submitCategory'])) {
        $categoryName = $_POST['categoryName'];
        $categoryDescription = $_POST['categoryDescription'];
    
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
    
            $errors = $createPositionController->createPosition(
                $positionName,
                $positionDescription
            );
    
        if (empty($errors)) {
            header("Location: /technique-db-mvc/view/add_new.php");
            exit();
        }
    }
}

/**
 * Keeps the accordion cards open in case of an error on submission.
 */
$accordionState = [
    'collapseOne' => (!empty($errors) && isset($_POST['submitTechnique'])) ? ' show' : '',
    'collapseTwo' => (!empty($errors) && isset($_POST['submitCategory'])) ? ' show' : '',
    'collapseThree' => (!empty($errors) && isset($_POST['submitPosition'])) ? ' show' : '',
];