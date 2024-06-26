<?php
namespace App\Models;

use PDO;

class TrainingClass
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTrainingClasses($userID)
    {
        $statement = $this->db->prepare("SELECT * FROM Class WHERE userID = :userID");
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
