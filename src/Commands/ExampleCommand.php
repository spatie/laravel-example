<?php

namespace Spatie\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'my-command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done in my command');

        return 0;
    }
}
