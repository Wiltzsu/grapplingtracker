<?php

// BeltLevelController.php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../src/models/BeltLevel.php';

class BeltLevelController {
    private $beltModel;

    public function __construct() {
        $db = Database::connect();
        $this->beltModel = new BeltLevel($db);
    }

    public function getTimeOnEachBelt() {
        $userID = $_SESSION['userID']; // Assuming the user's ID is stored in the session
        return $this->beltModel->timeOnBeltLevel($userID);
    }
}
