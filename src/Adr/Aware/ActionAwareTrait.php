<?php

namespace Embark\Adr\Aware;

use Embark\Adr\ActionInterface;

/**
 * Implementing classes can interact with ActionInterface instances
 */
trait ActionAwareTrait
{
    /**
     * @var ActionInterface
     */
    protected $action;

    /**
     * Set an action instance
     *
     * @param ActionInterface $action
     *
     * @return self
     */
    public function setAction(ActionInterface $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get an action instance
     *
     * @return ActionInterface
     */
    public function getAction()
    {
        return $this->action;
    }
}
