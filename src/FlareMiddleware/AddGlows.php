<?php

namespace MillCloud\FlareClient\FlareMiddleware;

namespace MillCloud\FlareClient\FlareMiddleware;

use Closure;
use MillCloud\FlareClient\Glows\GlowRecorder;
use MillCloud\FlareClient\Report;

class AddGlows implements FlareMiddleware
{
    protected GlowRecorder $recorder;

    public function __construct(GlowRecorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function handle(Report $report, Closure $next)
    {
        foreach ($this->recorder->glows() as $glow) {
            $report->addGlow($glow);
        }

        return $next($report);
    }
}
