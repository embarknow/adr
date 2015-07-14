<?php
namespace Embark\Journey\Exception;

use RuntimeException;
use Psr\Http\Message\ResponseInterface;

class HttpMethodNotAllowedException extends RuntimeException
{
    /**
     * @var array
     */
    protected $allowed = [];

    /**
     * Set allowed HTTP methods
     *
     * @param array $allowed
     */
    public function setAllowedMethods(array $allowed)
    {
        $this->allowed = $allowed;

        return $this;
    }

    /**
     * Get allowed HTTP methods
     *
     * @return array
     */
    public function getAllowedMethods()
    {
        return $this->allowed;
    }

    public function getStatusCode()
    {
        return 405;
    }

    public function withResponse(ResponseInterface $response)
    {
        return $response
            ->withHeader('Allow', implode(',', $this->getAllowedMethods()));
    }
}
