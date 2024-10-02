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

        // Counts weekly, monthly, biannual, all time mat time.
        $weeklyMatTime = $this->statsModel->countMatTimeWeekly($userID);
        $monthlyMatTime = $this->statsModel->countMatTimeMonthly($userID);
        $biannualMatTime = $this->statsModel->countMatTimeBiannual($userID);
        $totalMatTime = $this->statsModel->countMatTime($userID);

        // Counts weekly, monthly, biannual, all time round duration.
        $weeklyRoundDuration = $this->statsModel->countRoundDurationWeekly($userID);
        $monthlyRoundDuration = $this->statsModel->countRoundDurationMonthly($userID);
        $biannualRoundDuration = $this->statsModel->countRoundDurationBiannual($userID);
        $totalRoundDuration = $this->statsModel->countRoundDuration($userID);

        // Counts weekly, monthly, all time rounds.
        $totalRoundsWeekly = $this->statsModel->countRoundsWeekly($userID);
        $totalRoundsMonthly = $this->statsModel->countRoundsMonthly($userID);
        $totalRounds = $this->statsModel->countRounds($userID);

            // Prepare all data for JSON
        $preferences = [
            'weeklyMatTime' => $weeklyMatTime,
            'monthlyMatTime' => $monthlyMatTime,
            'biannualMatTime' => $biannualMatTime,
            'totalMatTime' => $totalMatTime,
            'weeklyRoundDuration' => $weeklyRoundDuration,
            'monthlyRoundDuration' => $monthlyRoundDuration,
            'biannualRoundDuration' => $biannualRoundDuration,
            'totalRoundDuration' => $totalRoundDuration,
            'totalRoundsWeekly' => $totalRoundsWeekly,
            'totalRoundsMonthly' => $totalRoundsMonthly,
            'totalRounds' => $totalRounds
        ];

        $jsonStatsData = json_encode($preferences);

        return $this->twig->render(
            'stats.twig', [
            'jsonStatsData' => $jsonStatsData,
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