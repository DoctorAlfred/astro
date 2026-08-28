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
        Schema::create('planet_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->integer('planet_id')->unique()->index();
            $table->json('name');
            $table->string('symbol')->nullable();
            $table->json('description');
            
            // Caratteristiche e attributi
            $table->json('characteristics')->nullable();
            $table->json('keywords');
            $table->json('colors')->nullable();
            $table->json('metals')->nullable();
            $table->json('day');
            
            // Dati astrologici
            $table->json('rulership')->nullable();
            $table->json('exaltation')->nullable();
            $table->json('fall')->nullable();
            $table->json('detriment')->nullable();
            
            // Tratti e caratteristiche
            $table->json('positive_traits');
            $table->json('negative_traits');
            
            // Informazioni aggiuntive
            $table->string('gender')->nullable();
            $table->float('average_speed')->nullable();
            $table->string('orbital_period')->nullable();

            $table->integer('trigram')->nullable();
            $table->string('trigram_significate')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('gender');
            $table->index('average_speed');
            $table->index('trigram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planet_meanings');
    }
};
