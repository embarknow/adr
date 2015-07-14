<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\EntityInterface;

/**
 * Implementing classes can interact with Entity instances
 */
trait EntityAwareTrait
{
    /**
     * @var EntityInterface
     */
    protected $entity;

    /**
     * Set an entity instance
     *
     * @param EntityInterface $entity
     *
     * @return self
     */
    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get an entity instance
     *
     * @return EntityInterface
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
