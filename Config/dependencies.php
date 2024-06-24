<?php

use Psr\Container\ContainerInterface;
use App\Models\TrainingClass;
use App\Controllers\TrainingClassController;

return [
    PDO::class => function (ContainerInterface $c) {
        $settings = $c->get('settings')['database'];
        return new PDO(
            $settings['dsn'],
            $settings['username'],
            $settings['password'],
            $settings['options']
        );
    },
    TrainingClass::class => DI\create()->constructor(DI\get(PDO::class)),
    TrainingClassController::class => DI\create()->constructor(DI\get(TrainingClass::class)),
];
