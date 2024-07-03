<?php

namespace App\Controllers;

use App\Models\Technique;
use App\Models\TrainingClass;
use Twig\Environment;

class MainViewController
{
    public function __construct(
        private Technique $techniqueModel, 
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
        $this->techniqueModel = $techniqueModel;
        $this->trainingClassModel = $trainingClassModel;
        $this->twig = $twig;
    }

    public function showJournalNoteForm()
    {
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $techniques = $this->techniqueModel->getTechniques($userID);
        $classes = $this->trainingClassModel->getTrainingClasses($userID);

        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('mainview/log_training.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username,
            'techniques' => $techniques,
            'classes' => $classes
        ]);
    }
}