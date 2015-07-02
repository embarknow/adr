<?php

namespace Embark\Adr\Aware;

use InvalidArgumentException;

/**
 * Implementing classes can interact with responder specifications
 * A responder specification is a string that resolves to a ResponderInterface instance
 */
trait ResponderSpecAwareTrait
{
    /**
     * @var string
     */
    protected $responderSpec;

    /**
     * Set a responder spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setResponderSpec($spec)
    {
        if (!is_string($spec)) {
            throw new InvalidArgumentException(sprintf(
                "Provided spec must be a string, %s given",
                gettype($spec)
            ));
        }

        $this->responderSpec = $spec;

        return $this;
    }

    /**
     * Get a responder spec
     *
     * @return string
     */
    public function getResponderSpec()
    {
        return $this->responderSpec;
    }
}
