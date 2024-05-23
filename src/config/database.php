<?php
/*// /config/database.php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = 'localhost';
$dbname = 'journaldb';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}*/

/**
 * Provider
 */
$provider = function()
{
    $instance = new PDO('mysql:host=localhost;dbname=journaldb;charset=utf8', 'root', '');
    $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // PDO uses only database's native prepared statements.
    return $instance;
};

/**
 * StructureFactory Class
 * Used to create objects that need a database connection,
 * ensuring that the connection is only created once and reused.
 * '$provider' stores a function that can create a database connection.
 * '$connection' stores the actual database connection once it is created.
 */
class StructureFactory
{
    protected $provider = null;
    protected $connection = null;

    /**
     * Constructor for StructureFactory class.
     * It takes one parameter, '$provider', which must be a callable (a function you can call).
     * Stores this function in the '$provider' for later use.
     */
    public function __construct(callable $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Checks if connection exists and creates connection if needed.
     * The 'create' method creates an object of the class named by '$name' and 
     * provides it with a database connection. $'name' is the name of the class 
     * you want to create an object of.
     */
    public function create($name)
    {
        if ($this->connection === null) {
            $this->connection = call_user_func($this->provider);
        }
        return new $name($this->connection);
    }
}

/**
 * Instantiate the factory with the provider.
 */
$factory = new StructureFactory($provider);
?>
