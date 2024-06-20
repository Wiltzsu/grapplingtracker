<?php
require_once __DIR__ . '/../config/Database.php';

$db = Database::connect();

// Prepare category options dropdown menu
$technique_options = '';
// Prepare the statement with the userID parameter
$query = "SELECT techniqueID, techniqueName, techniqueDescription, Position.positionName
          FROM Technique
          INNER JOIN Position ON Technique.positionID = Position.positionID
          WHERE Technique.userID = :userID";  // Ensure you reference the correct column for userID in the Technique table

$statement = $db->prepare($query);
$statement->bindParam(':userID', $userID, PDO::PARAM_INT);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $techniqueID = htmlspecialchars($row['techniqueID']);
    $techniqueName = htmlspecialchars($row['techniqueName']);
    $techniqueDescription = htmlspecialchars($row['techniqueDescription']);
    $positionName = htmlspecialchars($row['positionName']);
    
    $technique_options .= <<<HTML
    <option value="$techniqueID">
        $techniqueName - 
        $techniqueDescription -
        $positionName
    </option>
    HTML;
}

// Prepare class options dropdown menu
$class_options = '';

// Prepare the SQL query using a placeholder for the userID
$query = "SELECT classID, instructor, location, date, classDescription
          FROM Class
          WHERE userID = :userID";

// Prepare the statement
$statement = $db->prepare($query);

// Bind the userID to the placeholder in the prepared statement
$statement->bindParam(':userID', $userID, PDO::PARAM_INT);

// Execute the statement
$statement->execute();

// Fetch each row from the result set
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $classID = htmlspecialchars($row['classID']);
    $instructor = htmlspecialchars($row['instructor']);
    $location = htmlspecialchars($row['location']);
    $date = htmlspecialchars($row['date']);
    $classDescription = htmlspecialchars($row['classDescription']);
    
    // Concatenate the option HTML to the dropdown
    $class_options .= <<<HTML
    <option value="$classID">
        $instructor - 
        $location - 
        $date
    </option>
    HTML;
}