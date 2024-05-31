<?php
namespace App\Views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new Environment($loader,
        [
            'cache' => __DIR__ . '/cache',
            'auto_reload' => true
        ]);
    }

    public function renderMainView($data)
    {
        echo $this->twig->render('main_view.twig', ['data' => $data]);
    }

    public function renderRead($data)
    {
        echo $this->twig->render('read_view.twig', ['data' => $data]);
    }

    public function renderNotFound()
    {
        echo $this->twig->render('404.twig');
    }
}