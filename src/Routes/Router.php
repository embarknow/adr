<?php

namespace Embark\Journey\Routes;

use Psr\Http\Messages\ServerRequestInterface;
use Psr\Http\Messages\ResponseInterface;
use FastRoute\simpleDispatcher;
use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use Embark\Adr\Aware\ActionSpecAwareInterface;
use Embark\Adr\Aware\ActionSpecAwareTrait;
use Embark\Adr\Aware\ResponderSpecAwareInterface;
use Embark\Adr\Aware\ResponderSpecAwareTrait;
use Embark\Journey\Adapter\InjectorAdapterInterface;
use Embark\Journey\Aware\InjectorAwareInterface;
use Embark\Journey\Aware\InjectorAwareTrait;
use Embark\Journey\Routes\RouterInterface;

class       Router
implements  RouterInterface,
            ActionSpecAwareInterface,
            ResponderSpecAwareInterface,
            InjectorAwareInterface
{
    use ActionSpecAwareTrait;
    use ResponderSpecAwareTrait;
    use InjectorAwareTrait;

    /**
     * @var array
     */
    protected $methods;

    /**
     * @var array
     */
    protected $routes = [];

    public function __construct(InjectorAdapterInterface $injector, $actionSpec = null, $responderSpec = null)
    {
        $this->setInjector($injector);

        if (null !== $actionSpec) {
            $this->setActionSpec($actionSpec);
        }

        if (null !== $responderSpec) {
            $this->setResponderSpec($responderSpec);
        }
    }

    public function addRoutes(array $routes)
    {
        foreach ($routes as $name => $details) {
            $details['name'] = $name;
            $route = call_user_func_array([$this, 'addRoute'], $details);
        }
    }

    /**
     * Add a new route to the router
     *
     * @param string $method
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function addRoute($method, $pattern, $actionSpec, $domainSpec, $responderSpec = null, $name = '')
    {
        $method = strtolower($method);
        $responderSpec = (
            null === $responderSpec
            ? $this->responderSpec
            : $responderSpec
        );

        $this->routes[$method] = (
            !isset($this->routes[$method])
            ? []
            : $this->routes[$method]
        );

        return $this->routes[$method][$pattern] = $this->injector->make('Embark\Journey\Routes\RouteInterface', [
            ':actionSpec' => $actionSpec,
            ':domainSpec' => $domainSpec,
            ':responderSpec' => $responderSpec,
            ':name' => $name
        ]);
    }

    /**
     * Shortcut GET addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function get($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::GET, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut HEAD addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function head($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::HEAD, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut POST addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function post($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::POST, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut PUT addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function put($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::PUT, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut DELETE addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function delete($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::DELETE, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut TRACE addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function trace($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::TRACE, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut OPTIONS addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function options($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::OPTIONS, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut CONNECT addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function connect($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::CONNECT, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Shortcut PATCH addRoute
     *
     * @param string $pattern
     * @param string $actionSpec
     * @param string $domainSpec
     * @param string $responderSpec
     *  optional
     *
     * @return RouteInterface
     */
    public function patch($pattern, $actionSpec, $domainSpec, $responderSpec = null)
    {
        return $this->addRoute(self::PATCH, $pattern, $actionSpec, $domainSpec, $responderSpec);
    }

    /**
     * Invoke the router to dispatch a route
     *
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     *
     * @return array
     *
     * @throws HttpNotFoundException
     * @throws HttpMethodNotAllowedException
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $path   = $request->getUri()->getPath();
        $method = $this->getMethod($request);

        $routeInfo = $this->getDispatcher($method)->dispatch($method, $pattern);

        if ($routeInfo[0] === Dispatcher::METHOD_NOT_ALLOWED) {
            throw new HttpNotFoundException;
        } elseif ($routeInfo[0] === Dispatcher::NOT_FOUND) {
            throw (new HttpMethodNotAllowedException)->setAllowedMethods($routeInfo[1]);
        }

        list($_, $route, $arguments) = $routeInfo;

        $route = $this->getMatchedRoute($route);

        foreach ($arguments as $key => $value) {
            $request = $request->withAttribute($key, $value);
        }
    }

    /**
     * Get a request method from the current request
     *
     * @param  ServerRequestInterface $request
     *
     * @return string
     */
    protected function getMethod(ServerRequestInterface $request)
    {
        $method = $request->getMethod();

        if ($overrideMethod = $request->getHeaderLine('X-Http-Method-Override')) {
            $method = (
                $this->validateMethod($overrideMethod)
                ? $overrideMethod
                : $method
            );
        } elseif ($method === 'POST') {
            $body = $request->getParsedBody();

            if (is_object($body) && property_exists($body, '_METHOD')) {
                $method = (
                    $this->validateMethod($body->_METHOD)
                    ? $body->_METHOD
                    : $method
                );
            } elseif (is_array($body) && isset($body['_METHOD'])) {
                $method = (
                    $this->validateMethod($body['_METHOD'])
                    ? $body['_METHOD']
                    : $method
                );
            }
        }

        return $method;
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
    protected function validateMethod($method)
    {
        if (null === $this->methods) {
            $reflect = new ReflectionClass($this);
            $this->methods = $reflect->getConstants();
        }

        if (!in_array(strtoupper($method), $this->methods)) {
            throw new InvalidArgumentException(sprintf(
                "Provided method '%s' is not a valid HTTP method",
                $method
            ));
        }

        return true;
    }

    /**
     * Get a FastRoute dispatcher loaded with routes for the provided method
     *
     * @param  string $method
     *
     * @return Dispatcher
     */
    protected function getDispatcher($method)
    {
        return sinpleDispatcher(function (RouteCollector $collector) use ($method) {
            foreach ($this->routes[$method] as $pattern => $route) {
                $collector->addRoute($method, $path, $route);
            }
        });
    }

    /**
     * Get a matched route instance
     *
     * @param  RouteInterface $route
     *
     * @return MatchedRouteInterface
     */
    protected function getMatchedRoute(RouteInterface $route)
    {
        return $this->injector->make('Embark\Journey\RouteMatchInterface', [
            ':action' => $this->injector->make($route->getActionSpec()),
            ':domain' => $this->injector->make($route->getDomainSpec()),
            ':responder' => $this->injector->make($route->getResponderSpec())
        ]);
    }
}
