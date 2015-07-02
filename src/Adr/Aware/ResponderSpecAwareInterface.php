<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with responder specifications
 * A responder specification is a string that resolves to a ResponderInterface instance
 */
interface ResponderSpecAwareInterface
{
    /**
     * Set a responder spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setResponderSpec($spec);

    /**
     * Get a responder spec
     *
     * @return string
     */
    public function getResponderSpec();
}
