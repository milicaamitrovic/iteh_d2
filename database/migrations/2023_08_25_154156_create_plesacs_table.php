<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plesacs', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('email');
            $table->string('broj_telefona');
            $table->foreign('koreograf_id')->references('id')->on('koreografs');
            $table->unsignedBigInteger('koreograf_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plesacs');
    }
};
