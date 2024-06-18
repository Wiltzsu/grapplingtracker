<?php
require_once __DIR__ . '/../config/Database.php';

$db = Database::connect();

// Prepare category options dropdown menu
$technique_options = '';
$statement = $db->query(
    "SELECT techniqueID, techniqueName, techniqueDescription, Position.positionName
    FROM Technique
    INNER JOIN Position
    ON Technique.positionID = Position.positionID");
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $techniqueID = htmlspecialchars($row['techniqueID']);
        $techniqueName = htmlspecialchars($row['techniqueName']);
        $techniqueDescription = htmlspecialchars($row['techniqueDescription']);
        $positionName = htmlspecialchars($row['positionName']);
        
        $technique_options .= <<<HTML
        <option value="$techniqueID">
            Technique ID: $techniqueID -
            Technique: $techniqueName - 
            Description: $techniqueDescription -
            Position: $positionName

        </option>
        HTML;
}
// Prepare class options dropdown menu
$class_options = '';

// Using a prepared statement
$query = "SELECT classID, instructor, location, date, classDescription FROM Class ORDER BY classID DESC";
$statement = $db->prepare($query);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $classID = htmlspecialchars($row['classID']);
    $instructor = htmlspecialchars($row['instructor']);
    $location = htmlspecialchars($row['location']);
    $date = htmlspecialchars($row['date']);
    $classDescription = htmlspecialchars($row['classDescription']);
    
    $class_options .= <<<HTML
    <option value="$classID">
        classid: $classID -
        Instructor: $instructor - 
        Location: $location - 
        $date - Description: 
        $classDescription
    </option>
    HTML;
}
