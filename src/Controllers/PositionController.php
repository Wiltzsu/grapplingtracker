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
}