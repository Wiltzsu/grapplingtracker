<?php
/**
 * This file is responsible for setting up and configuring the Twig
 * templating engine.
 */

/**
 * Imports the 'FilesystemLoader' and the 'Environment' classes from
 * the Twig library.
 * 
 * 'FilesystemLoader' is responsible for loading template files from
 * the file system.
 * 
 * 'Environment' provides methods to load templates, render them
 * and configure the Twig environment.
 */
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// Include Composer autoload file.
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Creates a new instance of the 'FilesystemLoader', which tells
 * Twig where to look for template files.
 */
$loader = new FilesystemLoader(__DIR__ . '/../resources/views');

// Add a namespace for headers
$loader->addPath(__DIR__ . '/../resources/views/', 'Header');

/**
 * Creates a new instance of the 'Environment' class, passing the
 * 'FilesystemLoader' instance '$loader' and an array of options.
 */
$twig = new Environment(
    $loader, [
    // Specifies the directory where Twig should store compiled template cache.
    'cache' => __DIR__ . '/../cache',
    // Enables Twig's debug mode.
    'debug' => true,
    ]
);

// Returns the configured Twig environment.
return $twig;
