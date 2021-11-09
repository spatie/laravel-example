<?php

use Spatie\Example\Models\MyModel;

it('can return the uppercased value of a name', function() {
    /** @var MyModel $myModel */
   $myModel = MyModel::factory()->create(['name' => 'John']);

   expect($myModel->getUppercasedName())->toEqual('JOHN');
});
