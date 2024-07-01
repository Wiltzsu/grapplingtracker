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

    public function postCategory($categoryName, $categoryDescription)
    {
        $errors = $this->categoryModel->addCategory($categoryName, $categoryDescription);
        if (!empty($errors)) {
            return ['errors' => $errors, 'success' => false];
        }

        return ['success' => true];
    }

    public function getCategoriesForForm() {
        $categories = $this->categoryModel->getCategories();
        return $categories;
    }
}