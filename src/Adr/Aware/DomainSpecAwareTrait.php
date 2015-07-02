<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with domain specifications
 * A domain specification is a string that resolves to a DomainInterface instance
 */
trait DomainSpecAwareTrait
{
    /**
     * @var string
     */
    protected $domainSpec;

    /**
     * Set a domain spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setDomainSpec($spec)
    {
        if (!is_string($spec)) {
            throw new InvalidArgumentException(sprintf(
                "Provided spec must be a string, %s given",
                gettype($spec)
            ));
        }

        $this->domainSpec = $spec;

        return $this;
    }

    /**
     * Get a domain spec
     *
     * @return string
     */
    public function getDomainSpec()
    {
        return $this->domainSpec;
    }
}
