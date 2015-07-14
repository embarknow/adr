<?php

namespace Embark\Journey\Adapter;

use Psr\Log\LoggerInterface;
use Saladek\Monolog\Logger;
use Embark\Journey\Adapter\PsrLoggerAdapterInterface;
use Embark\Journey\Adapter\PsrLoggerAdapterTrait;

class MonologLoggerAdapter implements PsrLoggerAdapterInterface
{
    use PsrLoggerAdapterTrait;

    /**
     * Set the name of the logger
     *
     * @param string $name
     */
    public function setLogName($name)
    {
        if (null === $this->logger) {
            $this->logger = new Logger($name);
        }

        return $this;
    }

    /**
     * Get the name of the logger
     *
     * @return string
     */
    public function getLogName()
    {
        if (null === $this->logger) {
            throw new RuntimeException("No logger is set.");
        }

        return $this->logger->getName();
    }

    /**
     * Pushes a handler on to the stack.
     *
     * @param mixed $handler
     *
     * @return $this
     */
    public function pushHandler($handler)
    {
        return $this->logger->pushHandler($handler);
    }

    /**
     * Pops a handler from the stack
     *
     * @return HandlerInterface
     */
    public function popHandler()
    {
        return $this->logger->popHandler();
    }

    /**
     * @return array
     */
    public function getHandlers()
    {
        return $this->logger->getHandlers();
    }
}
