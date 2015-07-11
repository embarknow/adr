<?php

namespace Embark\Adr;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Embark\Adr\DomainInterface;
use Embark\Adr\HtmlInputInterface;
use Embark\Adr\PayloadInterface;
use Embark\Adr\ResponderInterface;

/**
 * Helper Action trait for use in Action instances
 */
trait ActionTrait
{
    /**
     * Execute a Domain instance to return a Payload
     *
     * @param  DomainInterface        $domain
     * @param  HtmlInputInterface     $input
     * @param  ServerRequestInterface $request
     *
     * @return Payload
     */
    public function getPayload(DomainInterface $domain, HtmlInputInterface $input, ServerRequestInterface $request)
    {
        return $domain($input($request));
    }

    /**
     * Execute a Responder instance to return a Response
     *
     * @param  ResponderInterface     $responder
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     * @param  PayloadInterface       $payload
     *
     * @return Response
     */
    public function getResponse(ResponderInterface $responder, ServerRequestInterface $request, ResponseInterface $response, PayloadInterface $payload)
    {
        return $responder($request, $response, $payload);
    }
}
