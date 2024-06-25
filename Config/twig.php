<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return function () {
    $loader = new FilesystemLoader(__DIR__ . '/../resources/views');
    return new Environment($loader);
};
