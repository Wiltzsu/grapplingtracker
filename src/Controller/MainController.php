<?php
namespace App\Controller;

use App\Config\Database;
use App\Model\CategoryModel;
use App\Model\DifficultyModel;
use App\Model\PositionModel;

class MainController {
    private $db;
    private $categoryController;
    private $difficultyController;
    private $positionController;

    public function __construct() {
        $this->db = Database::connect();
        $this->categoryController = new CategoryModel($this->db);
        $this->difficultyController = new DifficultyModel($this->db);
        $this->positionController = new PositionModel($this->db);
    }

    /**
     * Index method to handle the primary logic and view rendering.
     */
    public function index() {
        // Fetch data from each controller
        $categories = $this->categoryController->getAllCategories();
        $difficulties = $this->difficultyController->getAllDifficulties();
        $positions = $this->positionController->getAllPositions();

        // Pass the data to the view
        include __DIR__ . "/../View/add_new.php";
    }
}
