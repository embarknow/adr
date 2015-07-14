<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\RepositoryInterface;

/**
 * Implementing classes can interact with Repository instances
 */
trait RepositoryAwareTrait
{
    /**
     * @var RepositoryInterface
     */
    protected $repository;

    /**
     * Set a repository instance
     *
     * @param RepositoryInterface $repository
     *
     * @return self
     */
    public function setRepository(RepositoryInterface $repository)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get a repository instance
     *
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
}
