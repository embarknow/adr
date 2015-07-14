<?php

namespace Embark\Journey\Routes\Aware;

use Embark\Journey\Routes\RouterInterface;

/**
 * Implementing classes can interact with a Router instance
 */
interface RouterAwareInterface
{
    /**
     * Set a router instance
     *
     * @param RouterInterface $router
     *
     * @return self
     */
    public function setRouter(RouterInterface $router);

    /**
     * Get a router Instance
     *
     * @return RouterInterface
     */
    public function getRouter();
}
