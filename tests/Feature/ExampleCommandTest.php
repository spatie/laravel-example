<?php

use function Pest\Laravel\artisan;

use Spatie\Example\Commands\ExampleCommand;

it('can output the configured value', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(0);
});

it('can output the another value', function () {
    config()->set('example.command_output', 'something else');

    artisan(ExampleCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(0);
});
