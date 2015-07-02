<?php

namespace Embark\Adr;

use Embark\Adr\HttpInputInterface;

interface DomainInterface
{
    /**
     * Handle domain logic for an action.
     *
     * @param  HttpInputInterface $input
     *
     * @return PayloadInterface
     */
    public function __invoke(HttpInputInterface $input);
}
