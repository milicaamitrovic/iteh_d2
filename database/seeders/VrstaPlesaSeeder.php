<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VrstaPlesa;

class VrstaPlesaSeeder extends Seeder
{
    public function run(): void
    {
        VrstaPlesa::factory()->count(20)->create();
    }
}
