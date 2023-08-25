<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlesnaSkola;

class PlesnaSkolaSeeder extends Seeder
{
    public function run(): void
    {
        PlesnaSkola::factory()->count(20)->create();
    }
}
