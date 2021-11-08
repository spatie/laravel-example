<?php

use function Pest\Laravel\artisan;
use Spatie\Example\Commands\ExampleCommand;

it('can test', function () {
    artisan(ExampleCommand::class)->assertExitCode(0);
});
