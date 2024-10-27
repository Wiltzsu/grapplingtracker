<?php
/**
 * This file contains AddNewController class and its methods.
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

use Twig\Environment;

/**
 * This class is the AddNewController class
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class AddNewController
{
    /**
     * Constructor method for AddNewController.
     * 
     * @param Environment $twig Twig environment
     * 
     * @return void
     */
    public function __construct(
        private Environment $twig
    ) {
    }

    /**
     * Show the add new landing page view.
     * 
     * @return string
     */
    public function showAddNewView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        return $this->twig->render(
            'addnew/add-new.twig', [
              'userID' => $userID,
              'username' => $_SESSION['username'] ?? null
            ]
        );
    }
}