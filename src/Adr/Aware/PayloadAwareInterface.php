<?php

namespace Embark\Adr\Aware;

use Embark\Adr\PayloadInterface;

/**
 * Implementing classes can interact with PayloadInterface instances
 */
interface PayloadAwareInterface
{
    /**
     * Set a payload instance
     *
     * @param PayloadInterface $payload
     *
     * @return self
     */
    public function setPayload(PayloadInterface $payload);

    /**
     * Get a payload instance
     *
     * @return PayloadInterface
     */
    public function getPayload();
}
