<?php

namespace Embark\Adr\Aware;

use Embark\Adr\InputInterface;

/**
 * Implementing classes can interact with InputInterface instances
 */
interface InputAwareInterface
{
    /**
     * Set an input instance
     *
     * @param InputInterface $input
     *
     * @return self
     */
    public function setInput(InputInterface $input);

    /**
     * Get an input instance
     *
     * @return InputInterface
     */
    public function getInput();
}
