<?php
namespace App\Controllers;

use App\Models\MainViewModel;
use App\Views\View;

class MainViewController
{
    protected $view;
    protected $model;

    public function __construct()
    {
        $this->model = new MainViewModel();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->getMainViewData();
        $this->view->renderMainView($data);
    }
}