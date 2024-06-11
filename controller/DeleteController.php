<?php
require_once __DIR__ . '/../model/Technique.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

$deleteTechniqueController = new Technique($db);

$deleteTechnique = $deleteTechniqueController->deleteTechnique();