<?php

namespace Embark\Journey\Messenger\Aware;

use Psr\Http\Message\RequestInterface;

/**
 * Implementing classes can interact with RequestInterface instances
 */
trait RequestAwareTrait
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Set a request instance
     *
     * @param RequestInterface $request
     *
     * @return self
     */
    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get a request instance
     *
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }
}
