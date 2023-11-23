<?php

namespace MillCloud\FlareClient\Http\Exceptions;

use MillCloud\FlareClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
