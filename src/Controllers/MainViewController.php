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
        private Environment $twig,
    ) { 
    }

    public function showJournalNoteForm() :void
    {
        $userID = $_SESSION['userID'] ?? null;

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


    public function showMainView() :void
    {
        $userID = $_SESSION['userID'] ?? null;

        $techniquesClasses = $this->techniqueModel->getTechniques($userID);
        $matTimeData = $this->trainingClassModel->countMatTimeMonthly($userID);
        $techniquesData = $this->techniqueModel->countTechniquesMonthly($userID);
                
        echo $this->twig->render('mainview/main_view.twig', [
            'techniquesClasses' => $techniquesClasses,
            'totalMatTimeMonthly' => $matTimeData,
            'totalTechniquesLearnedMonthly' => $techniquesData,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }
}