<?php

namespace App\Models;

use PDO;
class Position
{
    private $db;
    private $positionName;
    private $positionDescription;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getPositions()
    {
        $statement = $this->db->prepare("SELECT * FROM Position");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validateAddPosition($positionName, $positionDescription)
    {
        $errors = [];

        if (empty($positionName)) {
            $errors['positionName'] = 'Add a name for the position.';
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $positionName)) {
            $errors['positionName'] = 'Position name can contain only letters and spaces.';
        }

        if (empty($positionDescription)) {
            $errors['positionDescription'] = 'Add a description for the position.';
        } else if (!preg_match("/^[a-zA-Z0-9\s]+$/", $positionDescription)) {
            $errors['positionDescription'] = 'Position description can contain only letters, numbers and spaces.';
        }

        return $errors;
    }

    public function addPosition(
        $positionName,
        $positionDescription
    ) {
        $this->positionName = $positionName;
        $this->positionDescription = $positionDescription;

        $errors = $this->validateAddPosition($positionName, $positionDescription);
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Position (
            positionName, positionDescription
        ) VALUES (
            :positionName, :positionDescription
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":positionName",
            $this->positionName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":positionDescription",
            $this->positionDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }
}
?>