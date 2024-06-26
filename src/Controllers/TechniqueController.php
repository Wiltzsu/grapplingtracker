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
}
?>