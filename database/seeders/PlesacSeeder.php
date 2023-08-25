<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plesac;

class PlesacSeeder extends Seeder
{
    public function run(): void
    {
        Plesac::factory()->count(20)->create();
    }
}
