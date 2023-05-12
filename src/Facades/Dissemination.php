<?php

namespace Uneca\Dissemination\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uneca\Dissemination\Dissemination
 */
class Dissemination extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uneca\Dissemination\Dissemination::class;
    }
}
