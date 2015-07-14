<?php

namespace Embark\Journey\Routes;

use Embark\Adr\ActionInterface;
use Embark\Adr\DomainInterface;
use Embark\Adr\ResponderInterface;
use Embark\Adr\ActionInstanceAwareInterface;
use Embark\Adr\ActionInstanceAwareTrait;
use Embark\Adr\DomainInstanceAwareInterface;
use Embark\Adr\DomainInstanceAwareTrait;
use Embark\Adr\ResponderInstanceAwareInterface;
use Embark\Adr\ResponderInstanceAwareTrait;

class       RouteMatch
implements  ActionInstanceAwareInterface,
            DomainInstanceAwareInterface,
            ResponderInstanceAwareInterface
{
    use ActionInstanceAwareTrait;
    use DomainInstanceAwareTrait;
    use ResponderInstanceAwareTrait;

    /**
     * Create a new instance of a matched route
     *
     * @param ActionInterface    $action
     * @param DomainInterface    $domain
     * @param ResponderInterface $responder
     */
    public function __construct(ActionInterface $action, DomainInterface $domain, ResponderInterface $responder)
    {
        $this->setAction($action);
        $this->setDomain($domain);
        $this->setResponder($responder);
    }
}
