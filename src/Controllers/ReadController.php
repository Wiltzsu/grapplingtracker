<?php
namespace App\Controllers;

use App\Models\ReadModel;
use App\Views\View;

class ReadController
{
    protected $view;
    protected $model;

    public function __construct()
    {
        $this->model = new ReadModel();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->getReadViewData();
        $this->view->renderRead($data);
    }
}