<?php

use Spatie\Example\Commands\ExampleCommand;
use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(ExampleCommand::class)->assertExitCode(0);
});
