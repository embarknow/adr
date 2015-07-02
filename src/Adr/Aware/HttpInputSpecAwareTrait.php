<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with http input specifications
 * An http input specification is a string that resolves to an HttpInputInterface instance
 */
trait HttpInputSpecAwareTrait
{
    /**
     * @var string
     */
    protected $httpInputSpec;

    /**
     * Set an http input spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setHttpInputSpec($spec)
    {
        if (!is_string($spec)) {
            throw new InvalidArgumentException(sprintf(
                "Provided spec must be a string, %s given",
                gettype($spec)
            ));
        }

        $this->httpInputSpec = $spec;

        return $this;
    }

    /**
     * Get an http input spec
     *
     * @return string
     */
    public function getHttpInputSpec()
    {
        return $this->httpInputSpec;
    }
}
