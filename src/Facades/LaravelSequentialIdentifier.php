<?php

namespace ThrelsLtd\LaravelSequentialIdentifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ThrelsLtd\LaravelSequentialIdentifier\LaravelSequentialIdentifier
 */
class LaravelSequentialIdentifier extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-sequential-identifier';
    }
}
