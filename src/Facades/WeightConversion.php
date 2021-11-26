<?php

namespace Lanash\WeightConversion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lanash\WeightConversion\WeightConversion
 */
class WeightConversion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'weight-conversion';
    }
}
