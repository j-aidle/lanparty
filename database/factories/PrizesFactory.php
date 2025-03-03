<?php

namespace Database\Factories;

use App\Models\Prize;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrizeFactory extends Factory
{
    protected $model = Prize::class;

    public function definition()
    {
      $faker = $this->faker;
      $faker->locale = 'es_ES';

      return [
          'id' => 1,
          'name' => $faker->name,
          'description' => $faker->name,
          'session' => $faker->name,
          'notes' => $faker->name,
          'value' => 1,
          'partner_id' => 1,
      ];
    }
}
