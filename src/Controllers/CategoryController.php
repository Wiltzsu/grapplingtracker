<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Position;
use Twig\Environment;

class CategoryController
{
    private $categoryModel;
    private $twig;

    public function __construct(Category $categoryModel, Environment $twig)
    {
        $this->categoryModel = $categoryModel;
        $this->twig = $twig;
    }

    public function getCategories()
    {
        return $this->categoryModel->getCategories();
    }

    public function addCategoryForm()
    {
        $userID = $_SESSION['userID'] ?? null;
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        echo $this->twig->render('addnew/add_category.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postCategory($formData)
    {
        $categoryName = $formData['categoryName'] ?? null;
        $categoryDescription = $formData['categoryDescription'] ?? null;

        $errors = $this->categoryModel->createNewCategory(
            $categoryName,
            $categoryDescription
        );
        
        if (!empty($errors)) {
            echo $this->twig->render('addnew/add_position.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            header('Location: addnew');
            exit();
        }
    }

    public function getCategoriesForForm() {
        $categories = $this->categoryModel->getCategories();
        return $categories;
    }
}