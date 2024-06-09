<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Technique.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class CreateTechniqueController
{
    private $_techniqueModel;

    /**
     * Inititalize with a database connection.
     * 
     * @param $db Database connection
     */
    public function __construct($db)
    {
        $this->_techniqueModel = new Technique($db);
    }

    public function createTechnique($techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID)
    {
        return $this->_techniqueModel->addTechnique($techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID);
    }
}

// Initialize empty arrays to store errors and input data.
$errors = ['emptyField' => ''];
$input = ['techniqueName' => '', 'techniqueDescription' => '', 'categoryID' => '', 'positionID' => '', 'difficultyID' => ''];

$db = Database::connect();

$createTechniqueController = new CreateTechniqueController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $techniqueName = $_POST['techniqueName'] ?? '';
    $techniqueDescription = $_POST['techniqueDescription' ?? ''];
    $categoryID = $_POST['categoryID' ?? ''];
    $positionID = $_POST['positionID' ?? ''];
    $difficultyID = $_POST['difficultyID' ?? ''];

    $errors = $createTechniqueController->createTechnique($techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID);

    if (empty($errors)) {
        header("Location: ../view/add_new.php");
        exit();
    } else {
        $error_message = join('<br>', $errors);
    }
}