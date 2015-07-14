<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Implementing classes can interact with ServerRequestInterface instances
 */
trait ServerRequestAwareTrait
{
    /**
     * @var ServerRequestInterface
     */
    protected $serverRequest;

    /**
     * Set a server request instance
     *
     * @param ServerRequestInterface $request
     *
     * @return self
     */
    public function setServerRequest(ServerRequestInterface $request)
    {
        $this->serverRequest = $request;

        return $this;
    }

    /**
     * Get a server request instance
     *
     * @return ServerRequestInterface
     */
    public function getServerRequest()
    {
        return $this->serverRequest;
    }
}
