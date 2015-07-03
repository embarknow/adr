<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Adapter\PsrLoggerAdapterInterface;

/**
 * Implementing classes can interact with LoggerAdapter instances
 */
interface LoggerAwareInterface
{
    /**
     * Set a logger instance
     *
     * @param PsrLoggerAdapterInterface $logger
     *
     * @return  self
     */
    public function setLogger(PsrLoggerAdapterInterface $logger);

    /**
     * Get a logger instance
     *
     * @return PsrLoggerAdapterInterface
     */
    public function getLogger();
}
