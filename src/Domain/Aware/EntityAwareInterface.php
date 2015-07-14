<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\EntityInterface;

/**
 * Implementing classes can interact with Entity instances
 */
interface EntityAwareInterface
{
    /**
     * Set an entity instance
     *
     * @param EntityInterface $entity
     *
     * @return self
     */
    public function setEntity(EntityInterface $entity);

    /**
     * Get an entity instance
     *
     * @return EntityInterface
     */
    public function getEntity();
}
