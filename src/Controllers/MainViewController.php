<?php
/**
 * This file contains MainViewController class and its methods.
 *
 * PHP version 8
 *
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
namespace App\Controllers;

use App\Models\Technique;
use App\Models\TrainingClass;
use App\Models\Note;
use Twig\Environment;

/**
 * This class is the MainViewController class.
 *
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class MainViewController
{
    /**
     * Constructor function for MainViewController.
     *
     * @param Technique     $techniqueModel     Technique model
     * @param TrainingClass $trainingClassModel TrainingClass model
     * @param Note          $noteClassModel     Note model
     * @param Environment   $twig               Twig environment
     *
     * @return void
     */
    public function __construct(
        private Technique $techniqueModel,
        private TrainingClass $trainingClassModel,
        private Note $noteClassModel,
        private Environment $twig
    ) {
    }

    /**
     * Show the main view.
     *
     * @return string
     */
    public function showMainView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        // Populates the techniques list.
        $techniquesClasses = $this->techniqueModel->getTechniques($userID, 10);

        // Populates the notes list.
        $quickNotes = $this->noteClassModel->getQuickNotes($userID);

        return $this->twig->render(
            'mainview/main_view.twig', [
            'techniquesClasses' => $techniquesClasses,
            // 'totalTechniquesLearnedMonthly' => $techniquesData,
            'quickNotes' => $quickNotes,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
            ]
        );
    }

    /**
     * Handles the post request.
     * 
     * @param array $formData Form data.
     * 
     * @return void
     */
    public function handlePostRequest($formData) :void
    {
        // Check if this is a delete request
        if (isset($formData['delete'])) {
            $this->deleteQuickNote($formData['quicknoteID']);
            // Otherwise, assume it's a note posting request 
        } else {
            $this->postQuickNote($formData);
        }
    }

    /**
     * Post a note.
     * 
     * @param array $formData Form data.
     * 
     * @return void
     */
    public function postQuickNote($formData) :void
    {
        $userID = $_SESSION['userID'] ?? null;
        $content = $formData['quicknote'] ?? null;

        $errors = $this->noteClassModel->validateQuickNote($content);

        if (!empty($errors)) {
            echo $this->twig->render(
                'mainview/main_view.twig', [
                'errors' => $errors,
                'input' => $formData,
                'userID' => $userID
                ]
            );
        } else {
            $this->noteClassModel->createQuickNote($userID, $content);
            header('Location: mainview');
            exit();
        }
    }

    /**
     * Delete a note.
     * 
     * @param int $quicknoteID Quicknote ID.
     * 
     * @return void
     */
    public function deleteQuickNote($quicknoteID)
    {
        $this->noteClassModel->deleteQuickNote($quicknoteID);
        header('Location: mainview');
        exit();
    }
}