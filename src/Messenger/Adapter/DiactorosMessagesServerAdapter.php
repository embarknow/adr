<?php

namespace Embark\Journey\Messenger;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Server;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response;
use Zend\Diactoros\Response\SapiEmitter;
use Embark\Journey\Messenger\Adapter\MessagesServerAdapterInterface;
use Embark\Journey\Messenger\Aware\ServerRequestAwareInterface;
use Embark\Journey\Messenger\Aware\ServerRequestAwareTrait;
use Embark\Journey\Messenger\Aware\ResponseAwareInterface;
use Embark\Journey\Messenger\Aware\ResponseAwareTrait;

/**
 * Zend Diactoros implementation of a messages server adapter
 */
class       DiactorosMessagesServerAdapter
implements  MessagesServerAdapterInterface,
            ServerRequestAwareInterface,
            ResponseAwareInterface
{
    use ServerRequestAwareTrait;
    use ResponseAwareTrait;

    /**
     * @var SapiEmitter
     */
    protected $emitter;

    /**
     * Construct a diactoros adapter
     */
    public function __construct()
    {
        $this->setServerRequest(ServerRequestFactory::fromGlobals());
        $this->setResponse(new Response());
        $this->emitter = new SapiEitter();
    }

    /**
     * Respond to a server request
     *
     * @param  callable $callback
     */
    public function respond(callable $callback)
    {
        ob_start();
        $bufferLevel = ob_get_level();

        $response = $callback($this->getServerRequest(), $this->getResponse());

        if (! $response instanceof ResponseInterface) {
            $response = $this->getResponse();
        }

        $this->emitter->emit($response, $bufferLevel);
    }
}
