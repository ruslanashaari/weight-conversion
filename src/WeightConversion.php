<?php

namespace Lanash\WeightConversion;

class WeightConversion
{
    final public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
