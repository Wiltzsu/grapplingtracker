<?php
require_once __DIR__ . '/../model/Technique.php';

$deleteTechniqueController = new Technique($db);
$deleteTechnique = $deleteTechniqueController->deleteTechnique();

$deleteCategoryController = new Category($db);
$deleteCategory = $deleteCategoryController->deleteCategory();

$deletePositionController = new Position($db);
$deletePosition = $deletePositionController->deletePosition();