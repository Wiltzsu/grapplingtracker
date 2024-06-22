<?php
/**
 * Model for interacting with the 'Category' table in the database.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

/**
 * Class Category
 * Handles database operations for the 'Category' table.
 */
class Category
{
    private $db;
    private $categoryName;
    private $categoryDescription;

    /**
     * Initializes the constructor with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Validates the input parameters for creating a new category.
     * Checks each parameter to ensure its not empty.
     * Checks if category already exist.
     * 
     * @param string $categoryName        Name of the category.
     * @param string $categoryDescription Description of the category.
     * 
     * @return Array Array of error messages, empty if valid.
     */
    private function _validateInput(
        $categoryName,
        $categoryDescription
    ) {
        $errors = [];
        if (empty($categoryName) 
            || empty($categoryDescription)
        ) {
            $errors['empty_field'] = 'Field cannot be empty.';
        }

        $categoryExists = $this->db->prepare(
            "SELECT 1 FROM Category WHERE categoryName = ?"
        );
        $categoryExists->execute([$categoryName]);
        if ($categoryExists->fetch(PDO::FETCH_ASSOC)) {
            $errors['categoryExists'] = 'Category name is already taken.';
        }
        return $errors;
    }

    /**
     * Add a new category to the database if input validation passes.
     * 
     * @param string $categoryName        Name of the category.
     * @param string $categoryDescription Description of the category.
     * 
     * @return Array Empty if successful, errors if not.
     */
    public function addCategory($categoryName, $categoryDescription)
    {
        $this->categoryName = $categoryName;
        $this->categoryDescription = $categoryDescription;

        $errors = $this->_validateInput($categoryName, $categoryDescription);

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

    /**
     * Fetches categories from database.
     * 
     * @return Array Return array of techniques.
     */
    public function readCategories()
    {
        $query = "SELECT * FROM Category ORDER BY categoryName";

        $statement = $this->db->prepare($query);

        $statement->execute();

        $categoryArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $categoryArray;
    }

    /**
     * Deletes category from the database.
     * 
     * @return null Returns null if 'categoryID' is not set.
     */
    public function deleteCategory()
    {
        if (isset($_POST['categoryID'])) {
            if (isset($_POST['deleteCategory'])) {
            // Assign the 'categoryID' value from the form to a variable.
            $categoryID = $_POST['categoryID'];

            $query = "DELETE FROM Category WHERE categoryID=:categoryID";

            $delete = $this->db->prepare($query);

            $delete->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);

            $delete->execute();
            header("Location: /technique-db-mvc/viewitems");
            exit();
            }

        }
    }

    public function getCategoryIdAndName(): array
    {
        $statement = $this->db->query('SELECT categoryID, categoryName FROM Category');
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
?>
