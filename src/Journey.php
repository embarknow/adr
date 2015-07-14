<?php

namespace Embark;

use Embark\Journey\Adapter\InjectorAdapterInterface;
use Embark\Journey\Adapter\PsrLoggerAdapterInterface;
use Embark\Journey\Aware\HttpMessagesAwareInterface;
use Embark\Journey\Aware\HttpMessagesAwareTrait;
use Embark\Journey\Aware\InjectorAwareInterface;
use Embark\Journey\Aware\InjectorAwareTrait;
use Embark\Journey\Aware\LoggerAwareInterface;
use Embark\Journey\Aware\LoggerAwareTrait;
use Embark\Journey\Routes\RouterInterface;
use Embark\Journey\Routes\Aware\RouterAwareInterface;
use Embark\Journey\Routes\Aware\RouterAwareTrait;

class       Journey
implements  HttpMessagesAwareInterface,
            InjectorAwareInterface,
            LoggerAwareInterface,
            RouterAwareInterface
{
    use InjectorAwareTrait;
    use HttpMessagesAwareTrait;
    use LoggerAwareTrait;
    use RouterAwareTrait;

    /**
     * Bootstrap an instance of this class
     *
     * @param  InjectorAdapterInterface $injector
     * @param  array                    $classmap
     *
     * @return self
     */
    public static function bootstrap(InjectorAdapterInterface $injector, array $classmap)
    {
        $injector->share($injector);
        $injector->bootstrap($classmap);

        return $injector->make(static::class);
    }

    /**
     * Construct an instance of this class
     *
     * @param InjectorAdapterInterface $injector
     * @param RouterInterface          $router
     * @param PsrLoggerAdapterInterface   $logger
     */
    public function __construct(InjectorAdapterInterface $injector, RouterInterface $router, PsrLoggerAdapterInterface $logger)
    {
        $this->setInjector($injector);
        $this->setRouter($router);
        $this->setLogger($logger);
    }
}
