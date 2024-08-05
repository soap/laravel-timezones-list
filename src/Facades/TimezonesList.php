<?php

namespace Soap\TimezonesList\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\TimezonesList\TimezonesList
 */
class TimezonesList extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Soap\TimezonesList\TimezonesList::class;
    }
}
