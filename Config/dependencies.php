<?php
/**
 * Dependency Injection Container Configuration
 * 
 * This file configures a Dependency Injection (DI) container using PHP-DI.
 * It defines how various classes and services should be instantiated and
 * injected throughout the application.
 */

use Psr\Container\ContainerInterface;
use App\Models\User;
use App\Models\TrainingClass;
use App\Models\Position;
use App\Models\Category;
use App\Models\Technique;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;
use App\Controllers\PositionController;
use App\Controllers\CategoryController;
use App\Controllers\TechniqueController;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

/**
 * Returns an array that defines how different classes and services should
 * be instantiated an injected.
 * 
 * @return Array Returns an array of settings for the DI container.
 */
return [
    /**
     * Defines how the 'PDO' class (for database connections) should be
     * instantiated.
     * 
     * The anonymous function receives a 'ContainerInterface' instance to
     * access other configurations or settings.
     * 
     * @return PDO Returns a PDO instance configured with database settings.
     */
    PDO::class => function (ContainerInterface $c) {
        // Retrieves the database settings from the container.
        $settings = $c->get('settings')['database'];
        // Creates and returns a new 'PDO' instance using the retrieved settings.
        return new PDO(
            $settings['dsn'],
            $settings['username'],
            $settings['password'],
            $settings['options']
        );
    },
    /**
     * Defines how the 'Environment' class from Twig should be instantiated.
     * 
     * @return Instance Returns a Twig Environment instance.
     */
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../resources/views');
        $loader->addPath(__DIR__ . '/../resources/views/', 'Header');
        return new Environment($loader, [
            'cache' => __DIR__ . '/../cache',
            'debug' => true,
        ]);
    },

    /**
     * Defines how the 'TrainingClass' model should be instantiated.
     * 
     * Tells the DI container to create a new 'TrainingClass' instance,
     * injecting the PDO instance to its constructor.
     */
    TrainingClass::class => DI\create()->constructor(DI\get(PDO::class)),

    /**
     * Defines how the 'TrainingClassController' should be instantiated.
     * 
     * Tells the DI container to create a new 'TrainingClassController instance,
     * injecting 'TrainingClass' instance into its constructor.
     */
    TrainingClassController::class => DI\create()->constructor(
        DI\get(TrainingClass::class),
        DI\get(Environment::class)
    ),

    /**
     * Defines how the 'User' model should be instantiated.
     * 
     * Tells the DI container to create a new 'User' instance, injecting the PDO
     * instance to its constructor.
     */
    User::class => DI\create()->constructor(
        DI\get(PDO::class)),

    /**
     * Defines how the 'UserController' should be instantiated.
     * 
     * Tells the DI container to create a new 'UserController' instance,
     * injecting both the 'User' instance and the Twig 'Environment' instance
     * to its constructor.
     */
    UserController::class => DI\create()->constructor(
        DI\get(User::class), 
        DI\get(Environment::class)
    ),

    /**
     * Defines how the 'Position' model should be instantiated.
     * 
     * Tells the DI container to create a new 'Position' instance, injecting
     * the PDO instance to its constructor.
     */
    Position::class => DI\create()->constructor(
        DI\get(PDO::class)
    ),

    /**
     * Defines how the 'PositionController' should be instantiated.
     * 
     * Tells the DI container to create a new 'PositionController' instance,
     * injecting both the 'Position' instance and the Twig 'Environment'
     * instance to its constructor.
     */
    PositionController::class => DI\create()->constructor(
        DI\get(Position::class),
        DI\get(Environment::class)
    ),

    /**
     * Defines how the 'Category' model should be instantiated.
     * 
     * Tells the DI container to create a new 'Category' instance,
     * injecting the PDO instance to its constructor.
     */
    Category::class => DI\create()->constructor(
        DI\get(PDO::class)
    ),

    /**
     * Defines how the 'CategoryController' should be instantiated.
     * 
     * Tells the DI container to create a new 'CategoryController'
     * instance, injecting both the 'Category' instance and the Twig
     * 'Environment' instance to its constructor.
     */
    CategoryController::class => DI\create()->constructor(
        DI\get(Category::class),
        DI\get(Environment::class)
    ),

    /**
     * Defines how the 'Technique' model should be instantiated.
     * 
     * Tells the DI container to create a new 'Technique' instance,
     * injecting the PDO instance to its constructor.
     */
    Technique::class => DI\create()->constructor(
        DI\get(PDO::class)
    ),

    /**
     * Tells the DI container to create a new 'TechniqueController',
     * instance, injecting the 
     * 'Technique' instance,
     * Twig 'Environment' instance,
     * 'Category' instance and
     * 'Position' instance to its constructor.
     */
    TechniqueController::class => DI\create()->constructor(
        DI\get(Technique::class),
        DI\get(Category::class),
        DI\get(Position::class),
        DI\get(Environment::class)
    ),
];
