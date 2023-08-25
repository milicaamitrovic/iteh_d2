<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PlesnaSkolaSeeder;
use Database\Seeders\VrstaPlesaSeeder;
use Database\Seeders\KoreografSeeder;
use Database\Seeders\PlesacaSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $plesna_skola = new PlesnaSkolaSeeder();
        $vrsta_plesa  = new VrstaPlesaSeeder();
        $koreograf = new KoreografSeeder();
        $plesac = new PlesacSeeder();

        $plesna_skola->run();
        $vrsta_plesa->run();
        $koreograf->run();
        $plesac->run();
    }
}
