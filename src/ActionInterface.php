<?php

namespace EmbarkNow\Adr;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ActionInterface
{
    /**
     * Handle the boundary between HTTP and the domain.
     *
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response);
}
