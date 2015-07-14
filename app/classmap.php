<?php

return [

    /**
     * Aliases tell our Injector where to find concrete classes for our many interfaces.
     * We can also alias a concrete class with another if we see fit to do so.
     */
    'alias' => [
        ['Psr\Http\Message\ServerRequestInterface', 'Embark\Journey\Adapter\DiactorosHttpMessagesAdapter::getServerRequest'],
        ['Psr\Http\Message\ResponseInterface', 'Embark\Journey\Adapter\DiactorosHttpMessagesAdapter::getResponse'],
        ['Embark\Journey\Adapter\InjectorAdapterInterface', 'Embark\Journey\Adapter\AurynInjectorAdapter'],
        ['Embark\Journey\Adapter\PsrLoggerAdapterInterface', 'Embark\Journey\Adapter\MonologLoggerAdapter'],
        ['Embark\Journey\Messenger\Adapter\MessagesServerAdapterInterface', 'Embark\Journey\Messenger\Adapter\DiactorosMessagesServerAdapter']
    ],

    /**
     * If any concrete classes need specific definition, we can do that here
     */
    'define' => [
        ['Embark\Journey\Messenger\Router', [
            ':responderSpec' => 'some string here'
        ]],
        ['Embark\AdrDemo\Shifts\GetShiftListAction', [
            'domain' => 'Embark\AdrDemo\Shifts\GetShiftListDomain',
            'responder' => 'Embark\AdrDemo\Shifts\GetShiftListResponder'
        ]]
    ],

    /**
     * Delegate tells our Injector to delegate the instantiation of a concrete class or interface to a callable
     */
    'delegate' => [
    ]
];
