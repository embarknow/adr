<?php

namespace Embark\Journey\Messenger;

use Embark\Journey\Messenger\Adapter\MessagesServerAdapterInterface;

/**
 * Interact with http messages
 */
class Server
{
    /**
     * Constructor accepts an adapter
     *
     * @param MessagesServerAdapterInterface $messagesServer
     */
    public function __construct(MessagesServerAdapterInterface $messagesServer)
    {
        $this->messagesServer = $messagesServer;
    }

    /**
     * Set the callback for this server
     *
     * @param callable $callback
     */
    public function setCallback(callable $callback)
    {
        $this->callback = $callback
    }

    /**
     * Respond to an http request
     */
    public function respond()
    {
        $this->messagesServer->respond($this->callback);
    }
}
