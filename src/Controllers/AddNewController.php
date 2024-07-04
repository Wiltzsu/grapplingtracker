<?php

namespace App\Controllers;

use Twig\Environment;

class AddNewController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function showAddNewList() :void
    {
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_new.twig', [
            'userID' => $_SESSION['userID'],
            'roleID' => $roleID,
            'username' => $username
        ]);
    }
}