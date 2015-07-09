<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with http input specifications
 * An http input specification is a string that resolves to an HttpInputInterface instance
 */
trait InputSpecAwareTrait
{
    /**
     * @var string
     */
    protected $inputSpec;

    /**
     * Set an input spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setInputSpec($spec)
    {
        if (!is_string($spec)) {
            throw new InvalidArgumentException(sprintf(
                "Provided spec must be a string, %s given",
                gettype($spec)
            ));
        }

        $this->inputSpec = $spec;

        return $this;
    }

    /**
     * Get an input spec
     *
     * @return string
     */
    public function getInputSpec()
    {
        return $this->inputSpec;
    }
}
