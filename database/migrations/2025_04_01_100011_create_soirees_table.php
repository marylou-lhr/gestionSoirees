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
        Schema::create('soirees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('lieu');
            $table->timestamp('dateHeure');
            $table->integer('prixEntree');
            $table->integer('capaciteMax');
            $table->string('theme');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soirees');
    }
};
