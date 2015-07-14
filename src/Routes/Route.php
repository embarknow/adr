<?php

namespace Embark\Journey\Routes;

use Embark\Adr\Aware\ActionSpecAwareInterface;
use Embark\Adr\Aware\ActionSpecAwareTrait;
use Embark\Adr\Aware\DomainSpecAwareInterface;
use Embark\Adr\Aware\DomainSpecAwareTrait;
use Embark\Adr\Aware\ResponderSpecAwareInterface;
use Embark\Adr\Aware\ResponderSpecAwareTrait;

class       Route
implements  ActionSpecAwareInterface,
            DomainSpecAwareInterface,
            ResponderSpecAwareInterface
{
    use ActionSpecAwareTrait;
    use DomainSpecAwareTrait;
    use ResponderSpecAwareTrait;

    public function __construct($actionSpec, $domainSpec, $responderSpec)
    {
        $this->setActionSpec($actionSpec);
        $this->setDomainSpec($domainSpec);
        $this->setResponderSpec($responderSpec);
    }
}
