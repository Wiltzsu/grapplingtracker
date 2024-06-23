<?php
require_once __DIR__ . '/../../src/models/Technique.php';
require_once __DIR__ . '/../../src/models/Category.php';
require_once __DIR__ . '/../../src/models/Position.php';
require_once __DIR__ . '/../../src/models/TrainingClass.php';

$deleteTechniqueController = new Technique($db);
$deleteTechnique = $deleteTechniqueController->deleteTechnique();

$deleteCategoryController = new Category($db);
$deleteCategory = $deleteCategoryController->deleteCategory();

$deletePositionController = new Position($db);
$deletePosition = $deletePositionController->deletePosition();

$deleteTrainingClassController = new TrainingClass($db);
$deleteTrainingClass = $deleteTrainingClassController->deleteTrainingClass();