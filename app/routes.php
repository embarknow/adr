<?php

/**
 * Routes file
 */
return [
    'index' => [
        'method' => 'GET',
        'pattern' => '/',
        'action' => 'testAction',
        'domain' => 'testDomain',
        // 'responder' => 'testResponder', // Optional, default is JSON output
    ]
];
