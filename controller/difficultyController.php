<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "model/difficultyModel.php";

class difficultyController {
    private $difficulty;

    public function __construct($db)
    {
        $this->difficulty = new Difficulty($db);
    }

    public function index() {
        $difficulties = $this->difficulty->getAllDifficulties();

        // Pass items to view
        require 'view/AddTechniqueView.php';

    }
}