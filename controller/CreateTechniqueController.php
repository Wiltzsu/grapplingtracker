<?php
/**
 * This file is the controller for creating a new technique.
 * It contains a method for creating a technique with the help
 * of the Model.
 * It also creates a connection to the database and instantiates
 * the controller.
 */

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Technique.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Class for technique creation.
 * Instantiates the Model in the constructor.
 * Uses the instance to call 'addTechnique' method from the Model.
 */
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

    /**
     * Uses the instance of the model and adds the technique to the database.
     * 
     * @param string $techniqueName        Name of the technique.
     * @param string $techniqueDescription Description of the technique.
     * @param int    $categoryID           Technique category.
     * @param int    $positionID           Technique position.
     * @param int    $difficultyID         Technique difficulty.
     * 
     * @return Array Returns an empty array if successful or an array containing errors.
     */
    public function createTechnique(
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
        $difficultyID
    ) {
        return $this->_techniqueModel->addTechnique(
            $techniqueName,
            $techniqueDescription,
            $categoryID,
            $positionID,
            $difficultyID
        );
    }
}

/**
 * Initialize empty arrays to store errors and input data.
 */
$errors = [
    'emptyField' => ''
];

$input = [
    'techniqueName' => '',
    'techniqueDescription' => '',
    'categoryID' => '',
    'positionID' => '',
    'difficultyID' => ''
];

/**
 * Initialize the database connection.
 * Instantiate the class.
 */
$db = Database::connect();
$createTechniqueController = new CreateTechniqueController($db);

/**
 * Checks if the form is posted and retrieves the input data.
 * '??' provides an empty default string.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $techniqueName = $_POST['techniqueName'] ?? '';
    $techniqueDescription = $_POST['techniqueDescription' ?? ''];
    $categoryID = $_POST['categoryID' ?? ''];
    $positionID = $_POST['positionID' ?? ''];
    $difficultyID = $_POST['difficultyID' ?? ''];

    /**
     * Executes the creation of a technique.
     * If no errors, redirect to 'addnew' page.
     */
    $errors = $createTechniqueController->createTechnique(
        $techniqueName,
        $techniqueDescription,
        $categoryID,
        $positionID,
        $difficultyID
    );

    if (empty($errors)) {
        header("Location: /technique-db-mvc/view/add_new.php");
        exit();
    }
}