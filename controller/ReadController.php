<?php
require_once __DIR__ . '/../model/Technique.php';
require_once __DIR__ . '/../model/Category.php';
require_once __DIR__ . '/../model/Position.php';
require_once __DIR__ . '/../config/Database.php';

// Database connection.
$db = Database::connect();

// Fetch the user from the session.
$userID = $_SESSION['userID'];

/**
 * Instantiate the technique Model.
 * Call readTechniques method to fetch the techniques
 * related to the user.
 * 
 * '$techniques' is used in 'viewitems' view to
 * display the techniques.
 */
$readTechniqueController = new Technique($db);
$techniques = $readTechniqueController->readTechniques($userID);

/**
 * Same operation as above but with categories.
 */
$readCategoryController = new Category($db);
$categories = $readCategoryController->readCategories();

/**
 * Same operation as above but with positions.
 */
$readPositionController = new Position($db);
$positions = $readPositionController->readPositions();

