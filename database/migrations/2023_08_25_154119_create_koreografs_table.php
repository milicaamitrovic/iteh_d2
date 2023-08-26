<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('koreografs', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('jmbg')->unique();
            $table->string('email');
            $table->integer('godine');
            $table->unsignedBigInteger('vrsta_plesa_id');
            $table->foreign('vrsta_plesa_id')->references('id')->on('vrsta_plesas')->onDelete('cascade');
            $table->unsignedBigInteger('plesna_skola_id');
            $table->foreign('plesna_skola_id')->references('id')->on('plesna_skolas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('koreografs');
    }
};
