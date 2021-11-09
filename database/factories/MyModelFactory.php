<?php

namespace Spatie\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Example\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}

