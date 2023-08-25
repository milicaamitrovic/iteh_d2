<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vrsta_plesas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('opis');
            $table->string('zemlja_porekla');
            $table->string('najpoznatija_numera');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vrsta_plesas');
    }
};
