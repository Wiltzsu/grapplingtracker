<?php
namespace App\Core;

use App\Controllers\MainViewController;
use App\Controllers\ReadController;


class Router
{
    protected $routes = [
        'home' => ['controller' => MainViewController::class, 'action' => 'index'],
        'addnew' => ['controller' => ReadController::class, 'action' => 'index'],
    ];

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes))
        {
            $controller = new $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];
            return $controller->$action();
        }
        throw new \Exception('No route defined for this URI.');
    }
}