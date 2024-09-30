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

        // Populates the pie chart.
        $positionsData = $this->techniqueModel->getTechniquesPerPosition($userID);


        // Prepare labels and values for the techniques per position
        $labels = array_map(
            function ($item) {
                return $item['positionName']; 
            }, $positionsData
        );
        $values = array_map(
            function ($item) {
                return $item['count']; 
            }, $positionsData
        );

        // Populates the line chart.
        $matTimeData = $this->trainingClassModel->countMatTimeMonthly($userID);
        $techniquesData = $this->techniqueModel->getTechniquesMonthly($userID);
        $combinedChartData = $this->prepareCombinedChartData($matTimeData, $techniquesData);
    
        return $this->twig->render(
            'mainview/main_view.twig', [
            'techniquesClasses' => $techniquesClasses,
            'totalMatTimeMonthly' => $matTimeData,
            'totalTechniquesLearnedMonthly' => $techniquesData,
            'techniquesPerPositionLabels' => json_encode($labels),
            'techniquesPerPositionValues' => json_encode($values),
            'combinedChartData' => json_encode($combinedChartData),
            'quickNotes' => $quickNotes,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
            ]
        );
    }

    private function prepareCombinedChartData($matTimeData, $techniquesData)
    {
        // Example logic to combine mat time and techniques data
        $combinedData = [];
        foreach ($matTimeData as $month => $hours) {
            $combinedData[$month] = [
                'matTime' => $hours,
                'techniques' => $techniquesData[$month] ?? 0 // Assuming $techniquesData is indexed by month
            ];
        }
        return $combinedData;
    }

    public function handlePostRequest($formData) :void
    {
        $userID = $_SESSION['userID'] ?? null;
    
        // Check if this is a delete request
        if (isset($formData['delete'])) {
            $this->deleteQuickNote($formData['quicknoteID']);
        } 
        // Otherwise, assume it's a note posting request
        else {
            $this->postQuickNote($formData);
        }
    }
    
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
    
    public function deleteQuickNote($quicknoteID)
    {
        $this->noteClassModel->deleteQuickNote($quicknoteID);
        header('Location: mainview');
        exit();
    }
}