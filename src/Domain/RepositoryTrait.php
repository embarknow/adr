<?php

namespace Embark\Journey\Domain;

use Embark\Adr\Domain\PayloadInterface;
use Embark\Journey\Domain\EntityInterface;

/**
 * Implementors are able to interact with the persistence layer
 */
trait RepositoryTrait
{
    /**
     * Create a new Entity in the persistence layer
     *
     * @param  EntityInterface $entity
     *
     * @return PayloadInterface
     */
    public function create(EntityInterface $entity)
    {

    }

    /**
     * Read an Entity or collection of Entities from the persistence layer
     *
     * @param  array  $filters
     *  array of filters to restrict the result
     * @param  array  $modifiers
     *  array of modifiers to adjust the result
     *
     * @return PayloadInterface
     */
    public function read(array $filters, array $modifiers = [])
    {

    }

    /**
     * Update an Entity in the persistence layer
     *
     * @param  EntityInterface $entity
     *  the Entity to update
     *
     * @return PayloadInterface
     */
    public function update(EntityInterface $entity)
    {

    }

    /**
     * Delete an Entity from the persistence layer
     *
     * @param  EntityInterface $entity
     *  the Entity to delete
     *
     * @return PayloadInterface
     */
    public function delete(EntityInterface $entity)
    {

    }

    /**
     * The Factory takes an array of data and creates an Entity instance
     *
     * @param  array  $data
     *  array of data for the Entity instance
     *
     * @return EntityInterface
     */
    public function factory(array $data)
    {

    }
}
