<?php

namespace Embark\Adr;

/**
 * Contains codes as constants to be used to define the status of a Payload
 */
class PayloadStatus
{
    // Generic Success        1xx
    const SUCCESS           = 100;
    const PROCESSING        = 101;
    const ACCEPTED          = 102;

    // Successful             2xx
    const CREATED           = 200;
    const FOUND             = 201;
    const UPDATED           = 202;
    const DELETED           = 203;
    const VALID             = 203;
    const AUTHENTICATED     = 204;
    const AUTHORIZED        = 205;

    // Failure                3xx
    const NOT_CREATED       = 300;
    const NOT_FOUND         = 301;
    const NOT_UPDATED       = 302;
    const NOT_DELETED       = 303;
    const NOT_VALID         = 304;
    const NOT_AUTHENTICATED = 305;
    const NOT_AUTHORIZED    = 306;

    // Generic Failure        4xx
    const FAILURE           = 400;
    const ERROR             = 401;
    const NOT_ACCEPTED      = 402;
}
