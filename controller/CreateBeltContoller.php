<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/BeltLevel.php';

class CreateBeltController
{
    private $_beltModel;

    public function __construct($db)
    {
        $this->_beltModel = new BeltLevel($db);
    }

    public function createBeltLevel($userID, $beltID, $given_at)
    {
        return $this->_beltModel->updateBeltLevel($userID, $beltID, $given_at);
    }
}