<?php

namespace Embark\Journey\Adapter;

use FastRoute\RouteCollector;
use FastRoute\RouteParser;
use FastRoute\RouteParser\Std as StdParser;
use FastRoute\DataGenerator;
use FastRoute\DataGenerator\GroupCountBased as GroupCountBasedGenerator;
use FastRoute\Dispatcher\GroupCountBased as GroupCountBasedDispatcher;
use Embark\Journey\Adapter\RouterAdapterInterface;

class FastRouteRouterAdapter implements RouterAdapterInterface
{
    protected $router;

    public function __construct()
    {
        $this->router = new RouteCollector(
            new StdParser,
            new GroupCountBasedGenerator
        );
    }

    public function addRoute($method, $pattern, $route)
    {

    }

    public function dispatch($method, $uriPath);
}
