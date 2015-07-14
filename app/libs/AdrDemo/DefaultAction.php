<?php

namespace Embark\Journey\Web\Shifts;

use Embark\Adr\ActionInterface;
use Embark\Adr\InputInterface;
use Embark\Adr\DomainInterface;
use Embark\Adr\ResponderInterface;
use Embark\Adr\Aware\InputAwareInterface;
use Embark\Adr\Aware\InputAwareTrait;
use Embark\Adr\Aware\DomainAwareInterface;
use Embark\Adr\Aware\DomainAwareTrait;
use Embark\Adr\Aware\ResponderAwareInterface;
use Embark\Adr\Aware\ResponderAwareTrait;

/**
 * This default Action instance should fulfil most needs.
 */
class       DefaultAction
implements  ActionInterface,
            InputAwareInterface,
            DomainAwareInterface,
            ResponderSpecAwareInterface
{
    use InputAwareTrait;
    use DomainAwareTrait;
    use ResponderAwareTrait;

    public function __construct(InputInterface $input, DomainInterface $domain, ResponderInterface $responder)
    {
        $this->setInput($input);
        $this->setDomain($domain);
        $this->setResponder($responder);
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, RouteInterface $route)
    {
        $domain    = $this->getDomain();
        $input     = $this->getInput();
        $responder = $this->getResponder();

        $payload  = $this->getPayload($domain, $input, $request);
        $response = $this->getResponse($responder, $request, $response, $payload);

        return $response;
    }
}
