<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(\Spatie\Example\Commands\ExampleCommand::class)->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
