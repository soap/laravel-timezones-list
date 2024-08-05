<?php

namespace Soap\TimezonesList\Commands;

use Illuminate\Console\Command;

class TimezonesListCommand extends Command
{
    public $signature = 'laravel-timezones-list';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
