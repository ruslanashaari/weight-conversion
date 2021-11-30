<?php

use Lanash\WeightConversion\WeightConversion;

it('can convert kilograms to pound correctly', function () {
    $pounds = WeightConversion::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
