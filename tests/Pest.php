<?php

use Illuminate\Support\Facades\Route;
use Spatie\Example\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function() {
        Route::example();
    })
    ->in('Feature');
