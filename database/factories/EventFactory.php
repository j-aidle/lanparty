<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * El nombre del modelo correspondiente a esta fábrica.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;
        $faker->locale = 'es_ES';

        return [
            'name' => $faker->name,
            'inscription_type_id' => $faker->unique()->randomNumber(8),
            'image' => $faker->firstName,
            'regulation' => $faker->url,
            'session' => $faker->text
        ];
    }
}
