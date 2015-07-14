<?php
namespace Embark\Journey\Exception;

use RuntimeException;

class HttpNotFoundException extends RuntimeException
{
    public function getStatusCode()
    {
        return 404;
    }
}
