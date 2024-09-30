<?php

/**
 * This file is a configuration file that returns an array of
 * settings related to the database connection.
 *
 * When included or required in another part of the application,
 * it returns an array containing these settings, which can
 * then be used to configure a 'PDO' instance for database
 * interactions.
 *
 * @return Array Returns an array of settings related to database
 * connection.
 */

return [
    'database' => [
        'dsn' => 'mysql:host=localhost;dbname=journaldb',
        'username' => 'root',
        'password' => '8HZejFXsvayVMK',
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            /**
             * Disable emulated prepared statements, which means that
             * prepared statements are handled by the MySQL server
             * itself, which can provide better security and performance.
             * */
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
    'twig' => [
        'views_path' => __DIR__ . '/../resources/views',
        'cache_path' => __DIR__ . '/../cache',
        'debug' => true,
    ]
];
