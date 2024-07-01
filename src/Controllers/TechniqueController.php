<?php

namespace App\Controllers;

use App\Models\Technique;

class TechniqueController
{
    private $techniqueModel;

    public function __construct(Technique $techniqueModel)
    {
        $this->techniqueModel = $techniqueModel;
    }

    public function getTechniques($userID)
    {
        return $this->techniqueModel->getTechniques($userID);
    }

    public function postTechnique($userID, $techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID)
    {
        $errors = $this->techniqueModel->addTechnique($userID, $techniqueName, $techniqueDescription, $categoryID, $positionID, $difficultyID);
        {
            if (!empty($errors)) {
                return ['errors' => $errors, 'success' => false];
            }

            return ['success' => true];
        }
    }
}
?>