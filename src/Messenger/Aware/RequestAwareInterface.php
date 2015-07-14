<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\RequestInterface;

/**
 * Implementing classes can interact with RequestInterface instances
 */
interface RequestAwareInterface
{
    /**
     * Set a request instance
     *
     * @param RequestInterface $request
     *
     * @return self
     */
    public function setRequest(RequestInterface $request);

    /**
     * Get a request instance
     *
     * @return RequestInterface
     */
    public function getRequest();
}
