<?php

namespace Embark\Journey\Routes;

use Psr\Http\Messages\ServerRequestInterface;
use Psr\Http\Messages\ResponseInterface;

interface RouterInterface
{
    const GET     = 'GET';
    const HEAD    = 'HEAD';
    const POST    = 'POST';
    const PUT     = 'PUT';
    const DELETE  = 'DELETE';
    const TRACE   = 'TRACE';
    const OPTIONS = 'OPTIONS';
    const CONNECT = 'CONNECT';
    const PATCH   = 'PATCH';

    public function addRoute($method, $pattern, $action, $domain, $responderSpec = null);

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response);
}
