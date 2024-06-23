<?php
/**
 * This file is responsible for checking for submission
 * on the grappling technique journal page.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../../src/controllers/CreateBeltContoller.php';

/**
 * Initialize empty arrays to store errors and input data.
 */
$db = Database::connect();
$createBeltController = new CreateBeltController($db);

/**
 * Check if form is submitted and retrieve input data.
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitBeltLevel'])) {
        $userID = $_SESSION['userID'];  // Get user ID from session
        $beltID = $_POST['beltID'];  // Belt level selected by the user
        $graduation_date = $_POST['graduation_date'];  // Date selected by the user
    

        $createBeltController->createBeltLevel(
            $userID,
            $beltID,
            $graduation_date
        );
            header("Location: /technique-db-mvc/profile");
            exit();
        
    }
}