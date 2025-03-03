<?php

namespace Database\Factories;

use App\Models\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

class NumberFactory extends Factory
{
    protected $model = Number::class;

    public function definition()
    {
        return [
            'value' => $this->faker->unique()->numberBetween(1, 500),
        ];
    }
}
