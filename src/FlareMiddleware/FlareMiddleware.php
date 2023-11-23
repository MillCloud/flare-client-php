<?php

namespace MillCloud\FlareClient\FlareMiddleware;

use Closure;
use MillCloud\FlareClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
