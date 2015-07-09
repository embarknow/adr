<?php

namespace Embark\Adr;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Input provided to a Domain instance must implement this interface.
 * Input implementing this interface must be considered valid.
 */
interface InputInterface
{
    /**
     * Extract domain input from the request.
     *
     * @param  ServerRequestInterface $request
     * @return array
     */
    public function __invoke(ServerRequestInterface $request);
}
