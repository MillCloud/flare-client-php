<?php

namespace MillCloud\FlareClient\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
