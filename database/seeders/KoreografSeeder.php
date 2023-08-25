<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Koreograf;

class KoreografSeeder extends Seeder
{
    public function run(): void
    {
        Koreograf::factory()->count(20)->create();
    }
}
