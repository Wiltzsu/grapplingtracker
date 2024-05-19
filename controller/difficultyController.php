<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "model/difficultyModel.php";

class difficultyController {
    // A private property that will hold the instance of the Difficulty model
    private $difficulty;

    public function __construct($db)
    {
        // Initializes the 'difficulty' property to hold an instance of the Difficulty model passing the database connection to it
        $this->difficulty = new Difficulty($db);
    }

    // Calls the 'getAllDifficulties' on the difficulty model to fetch all items
    public function getDifficulties() {
        return $this->difficulty->getAllDifficulties();
    }
}