<?php
/**
 * This file contains ProfileController class and its methods.
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

use App\Models\Profile;
use App\Models\Technique;
use App\Models\TrainingClass;
use Twig\Environment;

/**
 * This class is the ProfileController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class ProfileController
{
    /**
     * Constructor function for ProfileController.
     * 
     * @param Profile       $profileModel       Profile model
     * @param Technique     $techniqueModel     Technique model
     * @param TrainingClass $trainingClassModel TrainingClass model
     * @param Environment   $twig               Twig environment
     * 
     * @return void
     */
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

        echo $this->twig->render(
            'profile.twig', [
            'userID' => $userID,
            'username' => $username,
            'totalMatTimeMonthly' => $matTimeData,
            'totalTechniquesLearnedMonthly' => $techniquesData,

            'userID' => $userID,
            'username' => $_SESSION['username'] ?? null
            ]
        );
    }
}