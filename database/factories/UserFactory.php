<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
      $faker = $this->faker;
      $faker->locale = 'es_ES';

      return [
          'name' => $faker->name,
          'email' => $faker->unique()->safeEmail,
          'givenName' => $faker->firstName,
          'sn1' => $faker->lastName,
          'sn2' => $faker->lastName,
          'password' => bcrypt('password'), // secret
          'remember_token' => Str::random(10),
      ];
    }
}
