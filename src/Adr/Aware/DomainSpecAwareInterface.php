<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with domain specifications
 * A domain specification is a string that resolves to a DomainInterface instance
 */
interface DomainSpecAwareInterface
{
    /**
     * Set a domain spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setDomainSpec($spec);

    /**
     * Get a domain spec
     *
     * @return string
     */
    public function getDomainSpec();
}
