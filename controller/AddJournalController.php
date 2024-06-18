<?php
/**
 * This file is responsible for checking for submission
 * on the grappling technique journal page.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

 require_once 'CreateJournalController.php';

 /**
 * Initialize empty arrays to store errors and input data.
 */

$db = Database::connect();
$createJournalController = new CreateJournalController($db);

/**
 * Check if form is submitted and retrieve input data.
 */

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitTechniqueClass'])) {
        $techniqueID = $_POST['techniqueID'];
        $classID = $_POST['classID'];
        $userID = $_POST['userID'];

        $createJournalController->createJournalEntry(
            $techniqueID,
            $classID,
            $userID
        );


            header("Location: /technique-db-mvc/journal");
            exit();
        
    }
 }