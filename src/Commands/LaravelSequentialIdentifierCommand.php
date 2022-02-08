<?php

namespace ThrelsLtd\LaravelSequentialIdentifier\Commands;

use Illuminate\Console\Command;

class LaravelSequentialIdentifierCommand extends Command
{
    public $signature = 'laravel-sequential-identifier';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
