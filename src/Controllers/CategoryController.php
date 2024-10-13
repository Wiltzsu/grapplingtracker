<?php
/**
 * This file contains CategoryController class and its methods.
 * 
 * PHP version 8
 *
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
namespace App\Controllers;

use App\Models\Category;
use Twig\Environment;

/**
 * This class is the CategoryController class.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://grapplingtracker.com
 */
class CategoryController
{
    /**
     * Constructor function for CategoryController.
     * 
     * @param Category    $categoryModel Category model
     * @param Environment $twig          Twig environment
     */
    public function __construct(
        private Category $categoryModel,
        private Environment $twig
    ) {
    }

    /**
     * Get all categories.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
    public function getCategories($userID) :array
    {
        return $this->categoryModel->getCategories($userID);
    }

    /**
     * Show the category view.
     * 
     * @return string
     */
    public function showCategoryView() :string
    {
        $userID = $_SESSION['userID'] ?? null;

        $categories = $this->categoryModel->getCategories($userID);
        return $this->twig->render(
            'viewitems/view-categories.twig', [
            'categories' => $categories,
            'userID' => $userID,
            'roleID' => $_SESSION['roleID'] ?? null,
            'username' => $_SESSION['username'] ?? null
            ]
        );
    }

    /**
     * Show the add category form.
     * 
     * @return string
     */
    public function addCategoryForm() :string
    {
        $userID = $_SESSION['userID'] ?? null;
        $roleID = $_SESSION['roleID'] ?? null;
        $username = $_SESSION['username'] ?? null;

        return $this->twig->render(
            'addnew/add-category.twig', [
            'userID' => $userID,
            'roleID' => $roleID,
            'username' => $username
            ]
        );
    }

    /**
     * Post category.
     * 
     * @param array $formData Form data
     * 
     * @return string
     */
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

    /**
     * Get categories for form.
     * 
     * @param int $userID User ID
     * 
     * @return array
     */
    public function getCategoriesForForm($userID) :array
    {
        $categories = $this->categoryModel->getCategories($userID);
        return $categories;
    }
}