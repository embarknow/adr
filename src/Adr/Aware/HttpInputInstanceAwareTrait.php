<?php

namespace Embark\Adr\Aware;

use Embark\Adr\HttpInputInterface;

/**
 * Implementing classes can interact with HttpInputInterface instances
 */
trait HttpInputInstanceAwareTrait
{
    /**
     * @var HttpInputInterface
     */
    protected $httpInput;

    /**
     * Set an http input instance
     *
     * @param HttpInputInterface $httpInput
     *
     * @return self
     */
    public function setHttpInput(HttpInputInterface $httpInput)
    {
        $this->httpInput = $httpInput;

        return $this;
    }

    /**
     * Get an http input instance
     *
     * @return HttpInputInterface
     */
    public function getHttpInput()
    {
        return $this->httpInput;
    }
}
