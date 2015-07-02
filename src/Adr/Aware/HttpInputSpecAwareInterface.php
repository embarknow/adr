<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with http input specifications
 * An http input specification is a string that resolves to a HttpInputInterface instance
 */
interface HttpInputSpecAwareInterface
{
    /**
     * Set an http input spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setHttpInputSpec($spec);

    /**
     * Get an http input spec
     *
     * @return string
     */
    public function getHttpInputSpec();
}
