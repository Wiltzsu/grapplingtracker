<?php
require_once __DIR__ . '/../model/Technique.php';
require_once __DIR__ . '/../model/Category.php';
require_once __DIR__ . '/../model/Position.php';
require_once __DIR__ . '/../model/TrainingClass.php';

$deleteTechniqueController = new Technique($db);
$deleteTechnique = $deleteTechniqueController->deleteTechnique();

$deleteCategoryController = new Category($db);
$deleteCategory = $deleteCategoryController->deleteCategory();

$deletePositionController = new Position($db);
$deletePosition = $deletePositionController->deletePosition();

$deleteTrainingClassController = new TrainingClass($db);
$deleteTrainingClass = $deleteTrainingClassController->deleteTrainingClass();