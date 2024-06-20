<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Journal.php';

class CreateJournalController
{
    private $_journalModel;

    public function __construct($db)
    {
        $this->_journalModel = new Journal($db);
    }

    public function createJournalEntry($techniqueID, $classID, $userID) 
    {
        return $this->_journalModel->addTechniqueClass($techniqueID, $classID, $userID);
    }
}