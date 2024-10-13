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

    public function getCategories($userID) :array
    {
        return $this->categoryModel->getCategories($userID);
    }

    public function showCategoryView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $categories = $this->categoryModel->getCategories($userID);
        return $this->twig->render('viewitems/view-categories.twig', [
            'categories' => $categories,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
        ]);
    }

    public function addCategoryForm() :string
    {
        $userID = $_SESSION['userID'] ?? null;
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render('addnew/add-category.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
        ]);
    }

    public function postCategory($formData) :string
    {
        $categoryName = $formData['categoryName'] ?? null;
        $categoryDescription = $formData['categoryDescription'] ?? null;
        $userID = $formData['userID'] ?? null;

        $errors = $this->categoryModel->validateCreateNewCategory(
            $categoryName,
            $categoryDescription,
            $userID
        );
        
        if (!empty($errors)) {
            return $this->twig->render('addnew/add-category.twig', ['errors' => $errors, 'input' => $formData]);
        } else {
            $this->categoryModel->createNewCategory(
                $categoryName,
                $categoryDescription,
                $userID
            );
            
            header('Location: addcategory');
            exit();
        }
    }

    public function getCategoriesForForm($userID) :array
    {
        $categories = $this->categoryModel->getCategories($userID);
        return $categories;
    }
}