<?php
require_once __DIR__ . '/../../config/Database.php';

$db = Database::connect();

// Prepare category options dropdown menu
$categoryOptions = '';
$statement = $db->query('SELECT categoryID, categoryName FROM Category');
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $categoryOptions .= 
    '<option value="' . 
    htmlspecialchars($row['categoryID']) . '">' . 
    htmlspecialchars($row['categoryName']) . 
    '</option>';
}

// Prepare position options dropdown menu
$positionOptions = '';
$statement = $db->query('SELECT positionID, positionName FROM Position');
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $positionOptions .=
    '<option value="' .
    htmlspecialchars($row['positionID']) . '">' .
    htmlspecialchars($row['positionName']) .
    '</option>';
}

// Prepare difficulty options dropown menu
$difficultyOptions = '';
$statement = $db->query('SELECT difficultyID, difficulty FROM Difficulty');
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $difficultyOptions .=
    '<option value="' .
    htmlspecialchars($row['difficultyID']) . '">' .
    htmlspecialchars($row['difficulty']) .
    '</option>';
}
?>