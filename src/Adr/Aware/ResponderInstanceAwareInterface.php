<?php

namespace Embark\Adr\Aware;

use Embark\Adr\ResponderInterface;

/**
 * Implementing classes can interact with ResponderInterface instances
 */
interface ResponderInstanceAwareInterface
{
    /**
     * Set a responder instance
     *
     * @param ResponderInterface $responder
     *
     * @return self
     */
    public function setResponder(ResponderInterface $responder);

    /**
     * Get a responder instance
     *
     * @return ResponderInterface
     */
    public function getResponder();
}
