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
        $userID = $_SESSION['userID'] ?? null;
        if (!$userID) {
            header('Location: login');
            exit();
        }

        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_new.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }
}