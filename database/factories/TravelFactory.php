<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;
use Illuminate\Support\Facades\Auth;

class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => 2,
            'tanggal' => $this->faker->dateTimeBetween('-2 year', 'now'),
            'lokasi' => $this->faker->randomElement(['Bandung', 'Jakarta', 'Surabaya', 'Semarang']),
            'suhu' => $this->faker->numberBetween(32, 38)
        ];
    }
}
