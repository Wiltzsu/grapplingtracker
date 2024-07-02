<?php

namespace App\Controllers;

use App\Models\Position;
use Twig\Environment;

class PositionController
{
    private $positionModel;
    private $twig;

    public function __construct(Position $positionModel, Environment $twig)
    {
        $this->positionModel = $positionModel;
        $this->twig = $twig;
    }

    public function getPositions()
    {
        return $this->positionModel->getPositions();
    }

    public function addPositionForm()
    {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_position.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postPosition($formData)
    {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $positionName = $formData['positionName'] ?? null;
        $positionDescription = $formData['positionDescription'] ?? null;

        $errors = $this->positionModel->createPosition(
            $positionName,
            $positionDescription);

        if (!empty($errors)) {
            echo $this->twig->render('addnew/add_position.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            header('Location: addnew');
            exit();
        }
    }

    public function getPositionsForForm()
    {
        $positions = $this->positionModel->getPositions();
        return $positions;
    }
}