<?php
/**
 * This file contains the StatsController class.
 * 
 * PHP version 8.0
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */

namespace App\Controllers;

use App\Models\Stats;
use Twig\Environment;

/**
 * StatsController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class StatsController
{
    /**
     * Constructor function for StatsController.
     * 
     * @param Stats       $statsModel Stats model
     * @param Environment $twig       Twig environment
     * 
     * @return void
     */
    public function __construct(
        private Stats $statsModel,
        private Environment $twig,
    ) {
    }

    /**
     * Render the stats page.
     * 
     * @return string
     */
    public function showStatsPage() :string
    {
        $userID = $_SESSION['userID'] ?? null;
        
        // Counts weekly mat time.
        $weeklyMatTime = $this->statsModel->countMatTimeWeekly($userID);
        // Counts monthly mat time.
        $monthlyMatTime = $this->statsModel->countMatTimeMonthly($userID);
        // Counts biannual mat time.
        $biannualMatTime = $this->statsModel->countMatTimeBiannual($userID);
        // Counts total mat time.
        $totalMatTime = $this->statsModel->countMatTime($userID);

        // Counts weekly round duration.
        $weeklyRoundDuration = $this->statsModel->countRoundDurationWeekly($userID);
        // Counts monthly round duration.
        $monthlyRoundDuration = $this->statsModel->countRoundDurationMonthly($userID);
        // Counts biannual round duration.
        $biannualRoundDuration = $this->statsModel->countRoundDurationBiannual($userID);
        // Counts total round duration.
        $totalRoundDuration = $this->statsModel->countRoundDuration($userID);

        // Counts weekly rounds.
        $totalRoundsWeekly = $this->statsModel->countRoundsWeekly($userID);
        // Count monthly rounds.
        $totalRoundsMonthly = $this->statsModel->countRoundsMonthly($userID);
        // Counts total rounds.
        $totalRounds = $this->statsModel->countRounds($userID);

        return $this->twig->render(
            'stats.twig', [
            'weeklyMatTime' => $weeklyMatTime, 'monthlyMatTime' => $monthlyMatTime,
            'biannualMatTime' => $biannualMatTime, 'totalMatTime' => $totalMatTime,
            
            'weeklyRoundDuration' => $weeklyRoundDuration, 'monthlyRoundDuration' => $monthlyRoundDuration,
            'biannualRoundDuration' => $biannualRoundDuration,'totalRoundDuration' => $totalRoundDuration,
            
            'totalRoundsWeekly' => $totalRoundsWeekly, 'totalRoundsMonthly' => $totalRoundsMonthly,
            'totalRounds' => $totalRounds,
            ]
        );
    }
}