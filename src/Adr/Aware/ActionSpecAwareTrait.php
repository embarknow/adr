<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with action specifications
 * A action specification is a string that resolves to a ActionInterface instance
 */
trait ActionSpecAwareTrait
{
    /**
     * @var string
     */
    protected $actionSpec;

    /**
     * Set a action spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setActionSpec($spec)
    {
        if (!is_string($spec)) {
            throw new InvalidArgumentException(sprintf(
                "Provided spec must be a string, %s given",
                gettype($spec)
            ));
        }

        $this->actionSpec = $spec;

        return $this;
    }

    /**
     * Get a action spec
     *
     * @return string
     */
    public function getActionSpec()
    {
        return $this->actionSpec;
    }
}
