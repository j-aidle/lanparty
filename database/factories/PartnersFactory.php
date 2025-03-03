<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition()
    {
      $faker = $this->faker;
      $faker->locale = 'es_ES';

      return [
          'name' => $faker->name,
          'category' => $faker->randomElement(['Or', 'Plata', 'Bronze']),
          'session' => 2019,
      ];
    }
}
