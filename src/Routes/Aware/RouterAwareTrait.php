Aware<?php

namespace Embark\Journey\Routes\Adapter;

use Embark\Journey\Routes\RouterInterface;

/**
 * Implementing classes can interact with a Router instance
 */
trait RouterAwareTrait
{
    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * Set a router instance
     *
     * @param RouterInterface $router
     *
     * @return self
     */
    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * Get a router Instance
     *
     * @return RouterInterface
     */
    public function getRouter();
}
