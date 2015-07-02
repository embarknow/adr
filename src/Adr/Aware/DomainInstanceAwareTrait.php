<?php

namespace Embark\Adr\Aware;

use Embark\Adr\DomainInterface;

/**
 * Implementing classes can interact with DomainInterface instances
 */
trait DomainInstanceAwareTrait
{
    /**
     * @var DomainInterface
     */
    protected $domain;

    /**
     * Set a domain instance
     *
     * @param DomainInterface $domain
     *
     * @return self
     */
    public function setDomain(DomainInterface $domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get a domain instance
     *
     * @return DomainInterface
     */
    public function getDomain()
    {
        return $this->domain;
    }
}
