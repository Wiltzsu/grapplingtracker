<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DifficultyModel;
use App\Models\PositionModel;

class MainController
{
    protected $db;
    protected $categoryModel;
    protected $positionModel;
    protected $difficultyModel;

    public function __construct($db)
    {
        $this->categoryModel = new CategoryModel($db);
        $this->positionModel = new PositionModel($db);
        $this->difficultyModel = new DifficultyModel($db);
    }

    public function index()
    {
        $categories = $this->categoryModel->readCategories();
        $positions = $this->positionModel->readPositions();
        $difficulties = $this->difficultyModel->readDifficulties();

        require '/opt/lampp/htdocs/technique-db-mvc/src/Views/add_new.php';
    }
}