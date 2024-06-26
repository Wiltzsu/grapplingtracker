<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController
{
    private $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function getCategories()
    {
        return $this->categoryModel->getCategories();
    }
}