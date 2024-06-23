<?php
require_once __DIR__ . '/../../config/Database.php';

$db = Database::connect();

// Prepare difficulty options dropown menu
$belt_options = '';
$statement = $db->query('SELECT * FROM Belt_Level');
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $belt_options .=
    '<option value="' .
    htmlspecialchars($row['beltID']) . '">' .
    htmlspecialchars($row['color']) .
    '</option>';
}