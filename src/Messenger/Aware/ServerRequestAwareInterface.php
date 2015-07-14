<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Implementing classes can interact with ServerRequestInterface instances
 */
interface ServerRequestAwareInterface
{
    /**
     * Set a server request instance
     *
     * @param ServerRequestInterface $action
     *
     * @return self
     */
    public function setServerRequest(ServerRequestInterface $request);

    /**
     * Get a server request instance
     *
     * @return ServerRequestInterface
     */
    public function getServerRequest();
}
