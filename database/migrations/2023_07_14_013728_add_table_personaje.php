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
        // crear tabla de personajes
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('api_id');
            $table->string('nombre');
            $table->string('imagen');
            $table->string('estatus');
            $table->string('especie');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // borrar tabla de personajes
        Schema::dropIfExists('personajes');
    }
};
