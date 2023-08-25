<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VrstaPlesaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'naziv'=> $this->faker->randomElement($array = array ('Tango', 'Salsa','Bacata', 'Rumba', 'Samba', 'Balet', 
                                                                        'Folklor', 'Street dance', 'Breakdance','Cha-cha-cha', 'Hip hop',
                                                                        'Valcer', 'Jazz', 'Swing', 'Trbušni ples', 'Flamenco', 'Zumba', 'Show dance', 
                                                                        'Merengue', 'Funk', 'Paso doble', 'Kankan', 'Polka', 'Tarantela')),
            'opis'=> $this->faker->text($maxNbChars = 150),
            'zemlja_porekla'=> $this->faker->country(),
            'najpoznatija_numera'=> $this->faker->sentence($nbWords = 2, $variableNbWords = true)
        ];
    }
}
