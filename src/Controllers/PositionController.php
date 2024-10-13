<?php
/**
 * This file contains PositionController class and its methods.
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

use App\Models\Position;
use Twig\Environment;

/**
 * This class is the PositionController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class PositionController
{
    /**
     * Constructor function for PositionController.
     * 
     * @param Position    $positionModel Position model
     * @param Environment $twig          Twig environment
     */
    public function __construct(
        private Position $positionModel,
        private Environment $twig
    ) {
    }

    public function showPositionView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $positions = $this->positionModel->getPositions($userID);
        return $this->twig->render('viewitems/view-positions.twig', [
            'positions' => $positions,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }

    /**
     * Get all positions.
     * 
     * @return array
     */
    public function getPositions() :array
    {
        return $this->positionModel->getPositions();
    }

    /**
     * Renders the add position form.
     * 
     * @return string
     */
    public function addPositionForm() :string
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render(
            'addnew/add-position.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username
            ]
        );
    }

    /**
     * Posts a new position.
     * 
     * @param array $formData Form data
     * 
     * @return string
     */
    public function postPosition($formData) :string
    {
        $positionName = $formData['positionName'] ?? null;
        $positionDescription = $formData['positionDescription'] ?? null;

        $errors = $this->positionModel->validateCreatePosition(
            $positionName,
            $positionDescription
        );

        if (!empty($errors)) {
            return $this->twig->render('addnew/add-position.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            $this->positionModel->createNewPosition(
                $positionName,
                $positionDescription
            );

            header('Location: addposition');
            exit();
        }
    }

    /**
     * Get positions for form.
     * 
     * @return array
     */
    public function getPositionsForForm() :array
    {
        $positions = $this->positionModel->getPositions();
        return $positions;
    }
}