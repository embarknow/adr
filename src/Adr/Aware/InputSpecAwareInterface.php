<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with http input specifications
 * An http input specification is a string that resolves to a HttpInputInterface instance
 */
interface InputSpecAwareInterface
{
    /**
     * Set an input spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setInputSpec($spec);

    /**
     * Get an input spec
     *
     * @return string
     */
    public function getInputSpec();
}
