<?php

namespace Embark\Adr;

use Embark\Adr\PayloadInterface;
use Embark\Adr\Domain\PayloadStatus;

class PayloadTrait implements PayloadInterface
{
    /**
     * @var array
     */
    protected $constants;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var mixed
     */
    protected $output;

    /**
     * @var mixed
     */
    protected $messages;

    /**
     * @var array
     */
    protected $extras = [];

    /**
     * Construct an immutable Payload instance
     *
     * @param int            $status
     *  a status code matching a class constant
     * @param InputInterface $input
     *  the transaction instance requesting the Payload
     * @param array          $output
     *  array of Entity instances
     * @param array          $messages
     *  domain messages
     * @param array          $extras
     *  extra information
     */
    public function __construct($status, $output, array $messages = null, array $extras = [])
    {
        $this->validateStatus($status);

        $this->status = $status;
        $this->output = $output;
        $this->messages = $messages;
        $this->extras = $extras;
    }

    /**
     * Retrieves the status code for the payload
     *
     * @return int
     *  the status code for this payload
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Retrieves the output array of entities from the payload
     *
     * @return array
     *  array of entities
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Retrieves any domain messages relating to the payload
     *
     * @return array
     *  array of domain messages
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Retrieve any stored extra information
     *
     * @return array
     *  array of extra information
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Validate a provided status code
     *
     * @param  int $status
     *  a status code to validate
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     *  if the provided status code is invalid
     */
    protected function validateStatus($status)
    {
        if (null === $this->constants) {
            $reflect = new ReflectionClass(new PayloadStatus);
            $this->constants = $reflect->getConstants();
        }

        if (!in_array($status, $this->constants)) {
            throw new InvalidArgumentException(sprintf(
                "Provided status '%s' is not a valid Payload status",
                $status
            ));
        }

        return true;
    }
}
