<?php

namespace SANMV\Subscriptions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SANMV\Subscriptions\Subscriptions
 */
class Subscriptions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-subscriptions';
    }
}
