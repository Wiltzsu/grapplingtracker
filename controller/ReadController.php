<?php
require_once __DIR__ . '/../model/Technique.php';
require_once __DIR__ . '/../config/Database.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = Database::connect();
$readTechniqueController = new Technique($db);

$techniques = $readTechniqueController->readTechniques();