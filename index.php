<?php

require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return "Hello World";
});

$app->router->get('/testing', function () {
    return "Hola, testeando";
});

$app->run();