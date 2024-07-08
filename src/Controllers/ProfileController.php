<?php

namespace App\Controllers;

use App\Models\Profile;
use App\Models\Technique;
use App\Models\TrainingClass;
use Twig\Environment;

class ProfileController
{
    public function __construct(
        private Profile $profileModel,
        private Technique $techniqueModel, 
        private TrainingClass $trainingClassModel,
        private Environment $twig
    ) {
    }

    public function showProfile() :void
    {
        $userID = $_SESSION['userID'] ?? null;

        $username = $_SESSION['username'] ?? null;


        $matTimeData = $this->trainingClassModel->countMatTimeMonthly($userID);
        $techniquesData = $this->techniqueModel->getTechniquesMonthly($userID);

        echo $this->twig->render('profile.twig', [
            'userID' => $userID,
            'username' => $username,
            'totalMatTimeMonthly' => $matTimeData,
            'totalTechniquesLearnedMonthly' => $techniquesData,

            'userID' => $userID,
            'username' => $_SESSION['username'] ?? null
        ]);
    }
}