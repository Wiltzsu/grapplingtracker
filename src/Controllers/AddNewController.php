<?php

namespace App\Controllers;

use Twig\Environment;

class AddNewController
{
    public function __construct(
        private Environment $twig
    ) {
    }

    public function showAddNewList() :void
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add-new.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username
        ]);
    }
}