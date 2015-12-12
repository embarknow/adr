<?php

namespace EmbarkNow\Adr;

use EmbarkNow\Adr\RequestFilterInterface;
use EmbarkNow\Adr\PayloadInterface;

interface DomainInterface
{
    /**
     * Handle domain logic for an action.
     *
     * @param  RequestFilterInterface $requestFilter
     *
     * @return PayloadInterface
     */
    public function __invoke(RequestFilterInterface $requestFilter);
}
