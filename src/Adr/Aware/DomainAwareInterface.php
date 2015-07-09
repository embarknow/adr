<?php

namespace Embark\Adr\Aware;

use Embark\Adr\DomainInterface;

/**
 * Implementing classes can interact with DomainInterface instances
 */
interface DomainAwareInterface
{
    /**
     * Set a domain instance
     *
     * @param DomainInterface $domain
     *
     * @return self
     */
    public function setDomain(DomainInterface $domain);

    /**
     * Get a domain instance
     *
     * @return DomainInterface
     */
    public function getDomain();
}
