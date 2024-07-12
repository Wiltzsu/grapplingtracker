<?php

namespace App\Models;

use PDO;

class Category
{
    private $db;
    private $categoryName;
    private $categoryDescription;
    private $userID;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

public function getCategories($userID): array
{
    $query = "SELECT 
                Category.categoryID, 
                Category.categoryName, 
                Category.categoryDescription, 
                User.userID
              FROM Category
              LEFT JOIN User ON Category.userID = User.userID
              WHERE Category.userID = :userID OR Category.userID IS NULL
              ORDER BY categoryID DESC";

    $statement = $this->db->prepare($query);
    // Bind the userID to the placeholder
    $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    // Execute the statement
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

    public function validateCreateNewCategory($categoryName, $categoryDescription): array
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

    public function createNewCategory($categoryName, $categoryDescription, $userID): bool
    {
        $this->categoryName = $categoryName;
        $this->categoryDescription = $categoryDescription;
        $this->userID = $userID;

        $query = "INSERT INTO Category (
            categoryName, categoryDescription, userID
        ) VALUES (
            :categoryName, :categoryDescription, :userID
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
        $statement->bindParam(
            ":userID",
            $this->userID, PDO::PARAM_INT
        );
        
        return $statement->execute();
    }
}