<?php
namespace App\Controller;

use App\Config\Database;
use App\Model\CategoryModel;
use App\Model\DifficultyModel;
use App\Model\PositionModel;

/**
 * Controls the flow between the user interface and the model data processing,
 * coordinating responses based on user actions and input.
 *
 * @package Techniquedbmvc
 * @author William
 * @license MIT License
 */
class MainController
{
    private $_db;
    private $categoryModel;
    private $difficultyModel;
    private $positionModel;

    /**
     * Initializes the controller with model instances using a database connection.
     * @param \PDO $db Database connection
     */
    public function __construct(\PDO $db)
    {
        $this->_db = $db;
        $this->categoryModel = new CategoryModel($this->_db);
        $this->difficultyModel = new DifficultyModel($this->_db);
        $this->positionModel = new PositionModel($this->_db);
    }

    /**
     * Gathers data from models and passes them to the view for rendering.
     * This is the main entry point for rendering the page requested by the user.
     */
    public function index()
    {
        $categories = $this->categoryModel->getAllCategories();
        $difficulties = $this->difficultyModel->getAllDifficulties();
        $positions = $this->positionModel->getAllPositions();

        include __DIR__ . "/../View/add_new.php";
    }
}

