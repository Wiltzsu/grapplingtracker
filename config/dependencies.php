<?php

use DI\Container;
use Psr\Container\ContainerInterface;

return function (Container $container) {
    // Example database service
    $container->set('db', function (ContainerInterface $container) {
        $settings = require __DIR__ . '/settings.php';
        $db = $settings['settings']['db'];
        $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'], $db['user'], $db['pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    });
};
