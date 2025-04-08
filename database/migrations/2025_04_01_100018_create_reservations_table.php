<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emailEtud');
            $table->string('nomEtud');
            $table->string('numTel');
            $table->string('nomSoiree')->references('nom')->on('soirees');
            $table->timestamp('dateReserv');
            $table->string('statutReserv');
            $table->string('goodieAttribue')->references('nom')->on('goodies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
