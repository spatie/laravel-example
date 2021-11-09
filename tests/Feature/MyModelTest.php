<?php

use Illuminate\Support\Facades\DB;
use Spatie\Example\Models\MyModel;

it('can return the uppercased value of a name', function () {
    /** @var MyModel $myModel */
    $myModel = MyModel::factory()->create(['name' => 'John']);

    expect($myModel->getUppercasedName())->toEqual('JOHN');
});

it('can use json queries', function () {
    $models = DB::table('my_models')
        ->whereJsonContains('options->languages', 'en')
        ->get();

    expect($models)->toHaveCount(0);
});
