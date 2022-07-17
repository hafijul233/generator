<?php

namespace Hafijul233\Generator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hafijul233\Generator\Generator
 */
class Generator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'generator';
    }
}
