<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Adapter\InjectorAdapterInterface;

/**
 * Implementing classes can interact with InjectorAdapterInterface instances
 */
trait InjectorAwareTrait
{
    /**
     * @var InjectorAdapterInterface
     */
    protected $injector;

    /**
     * Set an injector instance
     *
     * @param InjectorAdapterInterface $injector
     *
     * @return self
     */
    public function setInjector(InjectorAdapterInterface $injector)
    {
        $this->injector = $injector;

        return $this;
    }

    /**
     * Get an injector instance
     *
     * @return InjectorAdapterInterface
     */
    public function getInjector()
    {
        return $this->injector;
    }
}
