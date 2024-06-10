<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Category.php';

ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class CreateCategoryController
{
    private $_categoryModel;

    /**
     * Initialize with a database connection.
     */
}