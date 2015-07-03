<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Adapter\InjectorAdapterInterface;

/**
 * Implementing classes can interact with InjectorAdapterInterface instances
 */
interface InjectorAwareInterface
{
    /**
     * Set an injector instance
     *
     * @param InjectorAdapterInterface $injector
     *
     * @return self
     */
    public function setInjector(InjectorAdapterInterface $injector);

    /**
     * Get an injector instance
     *
     * @return InjectorAdapterInterface
     */
    public function getInjector();
}
