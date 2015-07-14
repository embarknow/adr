<?php

namespace Embark\Journey\Adapter;

interface RouterAdapterInterface
{
    public function addRoute($method, $pattern, $route);

    public function dispatch($method, $uriPath);
}
