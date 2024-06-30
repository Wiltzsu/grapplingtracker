<?php

namespace App\Controllers;

use App\Models\Position;

class PositionController
{
    private $positionModel;

    public function __construct(Position $positionModel)
    {
        $this->positionModel = $positionModel;
    }

    public function getPositions()
    {
        return $this->positionModel->getPositions();
    }

    public function postPosition($positionName, $positionDescription)
    {
        $errors = $this->positionModel->addPosition($positionName, $positionDescription);
        if (!empty($errors)) {
            return ['errors' => $errors, 'success' => false];
        }

        return ['success' => true];
    }
}