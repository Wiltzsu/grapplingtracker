<?php

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$settings = require __DIR__ . '/settings.php';
$containerBuilder->addDefinitions(__DIR__ . '/dependencies.php');
$containerBuilder->addDefinitions([
    'settings' => $settings,
]);

return $containerBuilder->build();
