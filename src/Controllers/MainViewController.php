<?php

namespace App\Controllers;

use App\Models\JournalNote;
use App\Models\Technique;
use App\Models\TrainingClass;
use Twig\Environment;

class MainViewController
{
    public function __construct(
        private JournalNote $journalNoteModel,
        private Technique $techniqueModel, 
        private TrainingClass $trainingClassModel,
        private Environment $twig,
    ) {
        $this->journalNoteModel = $journalNoteModel;
        $this->techniqueModel = $techniqueModel;
        $this->trainingClassModel = $trainingClassModel;
        $this->twig = $twig;
    }

    public function getTechniquesClasses()
    {
        return $this->journalNoteModel->getTechniquesClasses();
    }

    public function showJournalNoteForm()
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

    public function postJournalEntry($formData) :void
    {
        $userID = $_SESSION['userID'] ?? null;

        $technique = $formData['techniqueID'] ?? null;
        $trainingClass = $formData['classID'] ?? null;

        $errors = $this->journalNoteModel->createNewJournalNote(
            $technique,
            $trainingClass,
            $userID
        );

        if (!empty($errors)) {
            echo $this->twig->render('mainview/log_training.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            header('Location: mainview');
            exit();
        }
    }

    public function showMainView()
    {
        $userID = $_SESSION['userID'] ?? null;

        $techniquesClasses = $this->journalNoteModel->getTechniquesClasses($userID);
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