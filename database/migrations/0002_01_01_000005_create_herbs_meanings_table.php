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
        Schema::create('herbs_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');                   // Nome comune
            $table->string('latin_name')->nullable(); // Nome botanico
            $table->string('family')->nullable();     // Famiglia botanica
            $table->string('genus')->nullable();      // Genere
            $table->string('species')->nullable();    // Specie

            // Flag funzionali
            $table->boolean('edible')->default(false);
            $table->boolean('toxic')->default(false);

            // Slug per URL / API
            $table->string('slug')->unique();

            $table->timestamps();
            $table->softDeletes();

             // Indici utili
             $table->index('name');
             $table->index('latin_name');
             $table->index('family');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herbs_meanings');
    }
};
