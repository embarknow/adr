<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\ResponseInterface;

/**
 * Implementing classes can interact with ResponseInterface instances
 */
interface ResponseAwareInterface
{
    /**
     * Set a response instance
     *
     * @param ResponseInterface $response
     *
     * @return self
     */
    public function setResponse(ResponseInterface $response);

    /**
     * Get a response instance
     *
     * @return ResponseInterface
     */
    public function getResponse();
}
