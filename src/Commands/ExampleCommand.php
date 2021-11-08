<?php

namespace Spatie\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'laravel-example';

    public $description = 'My command';

    public function handle(): int
    {
        dd('calling the command');
        $this->comment('All done');

        return self::SUCCESS;
    }
}
