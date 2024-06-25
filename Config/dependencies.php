<?php

use Psr\Container\ContainerInterface;
use App\Models\User;
use App\Models\TrainingClass;
use App\Controllers\UserController;
use App\Controllers\TrainingClassController;
use Twig\Environment;

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
    User::class => DI\create()->constructor(DI\get(PDO::class)),
    UserController::class => DI\create()->constructor(DI\get(User::class))
];
