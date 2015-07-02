<?php

namespace Embark\Adr\Aware;

use Embark\Adr\HttpInputInterface;

/**
 * Implementing classes can interact with HttpInputInterface instances
 */
interface HttpInputInstanceAwareInterface
{
    /**
     * Set an http input instance
     *
     * @param HttpInputInterface $httpInput
     *
     * @return self
     */
    public function setHttpInput(HttpInputInterface $httpInput);

    /**
     * Get an http input instance
     *
     * @return HttpInputInterface
     */
    public function getHttpInput();
}
