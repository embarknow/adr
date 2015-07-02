<?php

namespace Embark\Adr\Aware;

use Embark\Adr\ActionInterface;

/**
 * Implementing classes can interact with ActionInterface instances
 */
interface ActionInstanceAwareInterface
{
    /**
     * Set an action instance
     *
     * @param ActionInterface $action
     *
     * @return self
     */
    public function setAction(ActionInterface $action);

    /**
     * Get an action instance
     *
     * @return ActionInterface
     */
    public function getAction();
}
