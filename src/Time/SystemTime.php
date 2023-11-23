<?php

namespace MillCloud\FlareClient\Time;

use DateTimeImmutable;

class SystemTime implements Time
{
    public function getCurrentTime(): int
    {
        return (new DateTimeImmutable())->getTimestamp();
    }
}
