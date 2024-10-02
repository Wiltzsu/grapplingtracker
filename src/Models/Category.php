<?php
/**
 * This file contains the Category model and its methods.
 * 
 * PHP version 8.0.0
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
namespace App\Models;
use PDO;

/**
 * The Category model.
 * 
 * @category Controllers
 * @package  App\Controllers
 * @author   William Lönnberg <william.lonnberg@gmail.com>
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
class Category
{
    private $db;
    private $categoryName;
    private $categoryDescription;
    private $userID;

    /**
     * Constructor for the Category model.
     * 
     * @param PDO $db The database connection.
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get all categories from the database.
     * 
     * @param int $userID The user ID.
     * 
     * @return array An array of all categories.
     */
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

    /**
     * Validate the input for creating a new category.
     * 
     * @param string $categoryName        The name of the category.
     * @param string $categoryDescription The description of the category.
     * 
     * @return array An array of errors.
     */
    public function validateCreateNewCategory($categoryName, $categoryDescription): array
    {
        $errors = [];

        if (empty($categoryName)) {
            $errors['categoryName'] = 'Add a name for the category.';
        } else if (strlen($categoryName) > 50) {
            $errors['categoryName'] = 'Category name is too long.';
        }

        if (empty($categoryDescription)) {
            $errors['categoryDescription'] = 'Add a description for the category.';
        } else if (strlen($categoryDescription) > 255) {
            $errors['categoryDescription'] = 'Category description is too long.';
        }

        return $errors;
    }

    /**
     * Create a new category in the database.
     * 
     * @param string $categoryName        The name of the category.
     * @param string $categoryDescription The description of the category.
     * @param int    $userID              The user ID.
     * 
     * @return bool True if the category was created, false otherwise.
     */
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