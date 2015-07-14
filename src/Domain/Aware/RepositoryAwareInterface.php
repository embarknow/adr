<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\RepositoryInterface;

/**
 * Implementing classes can interact with Repository instances
 */
interface RepositoryAwareInterface
{
    /**
     * Set a repository instance
     *
     * @param RepositoryInterface $repository
     *
     * @return self
     */
    public function setRepository(RepositoryInterface $repository);

    /**
     * Get a repository instance
     *
     * @return RepositoryInterface
     */
    public function getRepository();
}
