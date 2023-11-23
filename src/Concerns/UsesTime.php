<?php

namespace MillCloud\FlareClient\Concerns;

use MillCloud\FlareClient\Time\SystemTime;
use MillCloud\FlareClient\Time\Time;

trait UsesTime
{
    public static Time $time;

    public static function useTime(Time $time): void
    {
        self::$time = $time;
    }

    public function getCurrentTime(): int
    {
        $time = self::$time ?? new SystemTime();

        return $time->getCurrentTime();
    }
}
