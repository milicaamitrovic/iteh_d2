<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plesna_skolas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('adresa');
            $table->string('grad');
            $table->string('email');
            $table->string('website');
            $table->string('broj_telefona');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plesna_skolas');
    }
};
