<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Adapter\PsrLoggerAdapterInterface;

/**
 * Implementing classes can interact with LoggerAdapter instances
 */
trait LoggerAwareTrait
{
    /**
     * @var PsrLoggerAdapterInterface
     */
    protected $logger;

    /**
     * Set a logger instance
     *
     * @param PsrLoggerAdapterInterface $logger
     *
     * @return  self
     */
    public function setLogger(PsrLoggerAdapterInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * Get a logger instance
     *
     * @return PsrLoggerAdapterInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }
}
