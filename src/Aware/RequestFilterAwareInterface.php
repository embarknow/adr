<?php

namespace EmbarkNow\Adr\Aware;

use EmbarkNow\Adr\RequestFilterInterface;

/**
 * Implementing classes can interact with RequestFilterInterface instances
 */
interface RequestFilterAwareInterface
{
    /**
     * Set an filter instance
     *
     * @param RequestFilterInterface $requestFilter
     *
     * @return self
     */
    public function setRequestFilter(RequestFilterInterface $requestFilter);

    /**
     * Get an filter instance
     *
     * @return RequestFilterInterface
     */
    public function getRequestFilter();
}
