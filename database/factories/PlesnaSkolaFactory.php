<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlesnaSkolaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->company(),
            'adresa' => $this->faker->unique()->streetAddress(),
            'email' => $this->faker->unique()->companyEmail(),
            'website' => $this->faker->unique()->url(),
            'broj_telefona' => $this->faker->unique()->phoneNumber(),
        ];
    }
}
