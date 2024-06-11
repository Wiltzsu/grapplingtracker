<?php
require_once __DIR__ . '/../model/Technique.php';
require_once __DIR__ . '/../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = Database::connect();

if (!isset($_SESSION['userID'])) {
    // Handle the case where the userID is not set in the session.
    echo "User is not logged in.";
    exit; // Prevent further execution if userID is not available.
}
$userID = $_SESSION['userID']; // Properly fetch the userID from session.

$readTechniqueController = new Technique($db);
$techniques = $readTechniqueController->readTechniques($userID);