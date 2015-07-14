<?php

namespace Embark\Journey\Messenger;

/**
 * Implementing classes are able to respond to server requests
 */
interface MessagesServerAdapterInterface
{
    /**
     * Respond to a server request
     *
     * @param  callable $callback
     */
    public function respond(callable $callback);
}
