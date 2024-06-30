<?php

namespace App\Models;

use PDO;

class Category
{
    private $db;
    private $categoryName;
    private $categoryDescription;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getCategories()
    {
        $statement = $this->db->prepare("SELECT * FROM Category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validateAddCategory($categoryName, $categoryDescription)
    {
        $errors = [];

        if (empty($categoryName)) {
            $errors['categoryName'] = 'Add a name for the category.';
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $categoryName)) {
            $errors['categoryName'] = 'Category name can contain only letters and spaces.';
        }

        if (empty($categoryDescription)) {
            $errors['categoryDescription'] = 'Add a description for the category.';
        } else if (!preg_match("/^[a-zA-Z0-9\s]+$/", $categoryDescription)) {
            $errors['categoryDescription'] = 'Category description can contain only letters, numbers and spaces.';
        }

        return $errors;
    }

    public function addCategory(
        $categoryName,
        $categoryDescription
    ) {
        $this->categoryName = $categoryName;
        $this->categoryDescription = $categoryDescription;

        $errors = $this->validateAddCategory($categoryName, $categoryDescription);
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO Category (
            categoryName, categoryDescription
        ) VALUES (
            :categoryName, :categoryDescription
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":categoryName",
            $this->categoryName, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":categoryDescription",
            $this->categoryDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }
}