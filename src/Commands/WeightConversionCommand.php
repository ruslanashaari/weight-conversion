<?php

namespace Lanash\WeightConversion\Commands;

use Illuminate\Console\Command;

class WeightConversionCommand extends Command
{
    public $signature = 'weight-conversion';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
