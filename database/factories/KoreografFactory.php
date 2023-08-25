<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PlesnaSkola;
use App\Models\VrstaPlesa;

class KoreografFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->unique()->regexify('[0-9]{13}'),
            'email' => $this->faker->unique()->email(),
            'godine_iskustva' => $this->faker->numberBetween($min=0, $max=20),
            'vrsta_plesa_id' => VrstaPlesa::factory(),
            'plesna_skola_id' => PlesnaSkola::factory()
        ];
    }
}
