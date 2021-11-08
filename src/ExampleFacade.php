<?php

namespace Spatie\Example;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Example\Example
 */
class ExampleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
