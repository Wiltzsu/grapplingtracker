<?php

namespace App\Controllers;

use App\Models\Position;
use Twig\Environment;

class PositionController
{
    public function __construct(
        private Position $positionModel,
        private Environment $twig
    ) {
    }

    public function getPositions() :array
    {
        return $this->positionModel->getPositions();
    }

    public function addPositionForm() :void
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_position.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postPosition($formData) :void
    {
        $positionName = $formData['positionName'] ?? null;
        $positionDescription = $formData['positionDescription'] ?? null;

        $errors = $this->positionModel->validateCreatePosition(
            $positionName,
            $positionDescription);

        if (!empty($errors)) {
            echo $this->twig->render('addnew/add_position.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            $this->positionModel->createNewPosition(
                $positionName,
                $positionDescription
            );

            header('Location: addnew');
            exit();
        }
    }

    public function getPositionsForForm() :array
    {
        $positions = $this->positionModel->getPositions();
        return $positions;
    }
}