<?php

namespace EmbarkNow\Adr\Aware;

use EmbarkNow\Adr\PayloadInterface;

/**
 * Implementing classes can interact with PayloadInterface instances
 */
trait PayloadAwareTrait
{
    /**
     * @var PayloadInterface
     */
    protected $payload;

    /**
     * Set a payload instance
     *
     * @param PayloadInterface $payload
     *
     * @return self
     */
    public function setPayload(PayloadInterface $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get a payload instance
     *
     * @return PayloadInterface
     */
    public function getPayload()
    {
        return $this->payload;
    }
}
