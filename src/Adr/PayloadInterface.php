<?php

namespace Embark\Adr;

/**
 * Payload Interface defines a Domain Payload
 */
interface PayloadInterface
{
    /**
     * Retrieves the status code for the payload
     *
     * @return int
     *  the status code for this payload
     */
    public function getStatus();

    /**
     * Retrieves the output array of entities from the payload
     *
     * @return array
     *  array of entities
     */
    public function getOutput();

    /**
     * Retrieves any domain messages relating to the payload
     *
     * @return array
     *  array of domain messages
     */
    public function getMessages();

    /**
     * Retrieve any stored extra information
     *
     * @return array
     *  array of extra information
     */
    public function getExtras();
}
