<?php

require __DIR__ . '/../vendor/autoload.php';

use Auryn\Injector;
use Embark\Journey;

$app = Journey\Application::bootstrap(
    new Journey\Adapter\AurynInjectorAdapter(new Auryn\Injector),
    require __DIR__ . '/../app/bootstrap.classmap.php'
);

$router = $app->getRouter();

foreach ((require __DIR__ . '/../app/routes.php') as $name => $details) {
    $details['name'] = $name;
    call_user_func_array([$router, 'addRoute'], $details);
}

var_dump($app);
