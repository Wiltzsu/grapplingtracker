<?php
/**
 * Controller category for interacting with the difficulty model and index.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Position.php';
require_once 'CreateTechniqueController.php';
require_once 'CreateCategoryController.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * PositionController Class
 */

class CreatePositionController
{
    /**
     * @var _positionModel Instance of the Position model.
     */
    private $_positionModel;

    /**
     * Initialize with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db) 
    {
        /**
         * Initializes the 'position' property to hold an instance of the Position
         * model passing the database connection to it.
         */
        $this->_positionModel = new Position($db);
    }

    public function createPosition($positionName, $positionDescription)
    {
        return $this->_positionModel->addPosition($positionName, $positionDescription);
    }
}

$errors = ['emptyField' => ''];

$input = ['positionName', 'positionDescription'];

$db = Database::connect();
$createTechniqueController = new CreateTechniqueController($db);
$createCategoryController = new CreateCategoryController($db);
$createPositionController = new CreatePositionController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitTechnique'])) {
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
    } elseif (isset($_POST['submitCategory'])) {
        $categoryName = $_POST['categoryName'];
        $categoryDescription = $_POST['categoryDescription'];
    
        /**
         * Execute the function.
         * If no errors, redirect to 'addnew' page.
         */
        $errors = $createCategoryController->createCategory(
            $categoryName,
            $categoryDescription
        );
    
        if (empty($errors)) {
            header("Location: /technique-db-mvc/view/add_new.php");
            exit();
        }
    } elseif (isset($_POST['submitPosition'])) {
            $positionName = $_POST['positionName'];
            $positionDescription = $_POST['positionDescription'];
    
            $errors = $createPositionController->createPosition($positionName, $positionDescription);
    
            if (empty($errors)) {
                header("Location: /technique-db-mvc/view/add_new.php");
                exit();
            }
        }
    }


