<?php

namespace Embark\Adr\Aware;

use Embark\Adr\ResponderInterface;

trait ResponderInstanceAwareTrait
{
    /**
     * @var ResponderInterface
     */
    protected $responder;

    /**
     * Set a responder instance
     *
     * @param ResponderInterface $responder
     *
     * @return self
     */
    public function setResponder(ResponderInterface $responder)
    {
        $this->responder = $responder;

        return $this;
    }

    /**
     * Get a responder instance
     *
     * @return ResponderInterface
     */
    public function getResponder()
    {
        return $this->responder;
    }
}
