<?php

namespace Embark\Adr;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Embark\Adr\PayloadInterface;

interface ResponderInterface
{
    /**
     * Handle marshalling a payload into an HTTP response.
     *
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     * @param  PayloadInterface       $payload
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, PayloadInterface $payload = null);
}
