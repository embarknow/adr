<?php

namespace EmbarkNow\Adr;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Input provided to a Domain instance must implement this interface.
 * Input implementing this interface must be considered valid.
 */
interface RequestFilterInterface
{
    /**
     * Extract domain input from the request.
     *
     * @param  ServerRequestInterface $request
     * @return self
     */
    public function __invoke(ServerRequestInterface $request);
}
