<?php

return [
    'database' => [
        'dsn' => 'mysql:host=localhost;dbname=journaldb',
        'username' => 'root', // Change this to your DB username
        'password' => '',     // Change this to your DB password
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
