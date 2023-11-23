<?php

namespace MillCloud\FlareClient\Http\Exceptions;

use MillCloud\FlareClient\Http\Response;

class NotFound extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Not found';
    }
}
