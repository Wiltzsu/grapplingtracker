<?php

namespace App\Controllers;

use App\Models\Category;
use Twig\Environment;

class CategoryController
{
    public function __construct(
        private Category $categoryModel,
        private Environment $twig
    ) {
    }

    public function getCategories() :array
    {
        return $this->categoryModel->getCategories();
    }

    public function addCategoryForm() :string
    {
        $userID = $_SESSION['userID'] ?? null;
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render('addnew/add_category.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postCategory($formData) :string
    {
        $categoryName = $formData['categoryName'] ?? null;
        $categoryDescription = $formData['categoryDescription'] ?? null;

        $errors = $this->categoryModel->validateCreateNewCategory(
            $categoryName,
            $categoryDescription
        );
        
        if (!empty($errors)) {
            return $this->twig->render('addnew/add_category.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            $this->categoryModel->createNewCategory(
                $userID = $_SESSION['userID'],
                $categoryName,
                $categoryDescription
            );
            
            header('Location: addnew');
            exit();
        }
    }

    public function getCategoriesForForm() :array
    {
        $categories = $this->categoryModel->getCategories();
        return $categories;
    }
}