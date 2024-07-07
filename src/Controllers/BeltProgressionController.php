<?php

namespace App\Controllers;

use Twig\Environment;

class BeltProgressionController
{
    public function __construct(
        private Environment $twig
    ) {

    }

    public function showBeltProgression() :void
    {
        $userID = $_SESSION['userID'] ?? null;

        echo $this->twig->render('belt_progression.twig', [
            'userID' => $userID
        ]);
    }
}