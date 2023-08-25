<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Koreograf;

class PlesacFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->unique()->regexify('[0-9]{13}'),
            'email' => $this->faker->unique()->email(),
            'broj_telefona'=> $this->faker->unique()-> phoneNumber(),
            'koreograf_id' => Koreograf::factory() 
        ];
    }
}
