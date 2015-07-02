<?php

namespace Embark\Adr\Aware;

/**
 * Implementing classes can interact with action specifications
 * A action specification is a string that resolves to a ActionInterface instance
 */
interface ActionSpecAwareInterface
{
    /**
     * Set a action spec
     *
     * @param string $spec
     *
     * @return self
     */
    public function setActionSpec($spec);

    /**
     * Get a action spec
     *
     * @return string
     */
    public function getActionSpec();
}
