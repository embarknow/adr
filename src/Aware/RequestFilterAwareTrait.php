<?php

namespace EmbarkNow\Adr\Aware;

use EmbarkNow\Adr\RequestFilterInterface;

/**
 * Implementing classes can interact with RequestFilterInterface instances
 */
trait RequestFilterAwareTrait
{
    /**
     * @var RequestFilterInterface
     */
    protected $requestFilter;

    /**
     * Set an filter instance
     *
     * @param RequestFilterInterface $requestFilter
     *
     * @return self
     */
    public function setRequestFilter(RequestFilterInterface $requestFilter)
    {
        $this->requestFilter = $requestFilter;

        return $this;
    }

    /**
     * Get an filter instance
     *
     * @return RequestFilterInterface
     */
    public function getRequestFilter()
    {
        return $this->requestFilter;
    }
}
