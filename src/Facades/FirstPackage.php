<?php

namespace Alanx15a2\FirstPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alanx15a2\FirstPackage\FirstPackage
 */
class FirstPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alanx15a2\FirstPackage\FirstPackage::class;
    }
}
