<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\ResponseInterface;

/**
 * Implementing classes can interact with ResponseInterface instances
 */
trait ResponseAwareTrait
{
    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * Set a response instance
     *
     * @param ResponseInterface $response
     *
     * @return self
     */
    public function setResponse(ResponseInterface $response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get a response instance
     *
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
