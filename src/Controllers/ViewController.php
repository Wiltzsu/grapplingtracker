<?php
/**
 * This file contains ViewController class and its methods.
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
 * This class is the ViewController class
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class ViewController
{
    /**
     * Constructor method for ViewController.
     * 
     * @param Environment $twig Twig environemtn
     * 
     * @return void
     */
    public function __construct(
        private Environment $twig
    ) {
    }

    /**
     * Show the view default page.
     * 
     * @return string
     */
    public function showViewItems() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        return $this->twig->render(
            'viewitems/view-items.twig', [
              'userID' => $userID,
              'username' => $_SESSION['username'] ?? null
            ]
        );
    }
}