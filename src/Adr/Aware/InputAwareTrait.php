<?php

namespace Embark\Adr\Aware;

use Embark\Adr\InputInterface;

/**
 * Implementing classes can interact with InputInterface instances
 */
trait InputAwareTrait
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * Set an input instance
     *
     * @param InputInterface $input
     *
     * @return self
     */
    public function setInput(InputInterface $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Get an input instance
     *
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }
}
