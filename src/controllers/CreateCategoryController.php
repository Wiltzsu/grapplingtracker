<?php
/**
 * This file is responsible for creating a new category.
 * The constructor is initialized with a category Model
 * and a database connection. It then calls the method
 * from the model to create a new category.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../src/models/Category.php';
require_once 'CreatePositionController.php';
require_once 'CreateTechniqueController.php';
require_once 'CreateClassController.php';

/**
 * Class for creating the category.
 * Includes a constructor method and a method for category creation.
 */
class CreateCategoryController
{
    private $_categoryModel;

    /**
     * Initialize with a database connection.
     * 
     * @param $db Database connection.
     */
    public function __construct($db)
    {
        $this->_categoryModel = new Category($db);
    }

    /**
     * Creates a new category
     * 
     * @param string $categoryName        Name of the category.
     * @param string $categoryDescription Category description.
     * 
     * @return Array Returns empty array if successful or an array containing errors.
     */
    public function createCategory(
        $categoryName,
        $categoryDescription
    ) {
        return $this->_categoryModel->addCategory(
            $categoryName,
            $categoryDescription
        );
    }
}