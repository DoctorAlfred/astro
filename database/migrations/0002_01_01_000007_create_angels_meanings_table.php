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
        Schema::create('angels_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->unsignedTinyInteger('number')->unique(); // 1–72
            $table->string('name');
            $table->string('hebrew_letters', 10);
            $table->string('hebrew_name')->nullable();

            // Dettagli simbolici (JSON)
            $table->json('letter_details')->nullable();

            // Gerarchia angelica
            $table->string('choir');
            $table->string('archangel');
            $table->string('element');
            $table->string('zodiac_sign');
            $table->string('planet')->nullable();

            // Reggenza strutturata
            $table->unsignedTinyInteger('regency_start_day');
            $table->unsignedTinyInteger('regency_start_month');
            $table->unsignedTinyInteger('regency_end_day');
            $table->unsignedTinyInteger('regency_end_month');

            // Gradi zodiacali
            $table->unsignedTinyInteger('degree_start');
            $table->unsignedTinyInteger('degree_end');
            $table->string('orientation', 5)->default('EST');

            // Salmi
            $table->unsignedSmallInteger('psalm');
            $table->unsignedSmallInteger('psalm_verse');
            $table->unsignedSmallInteger('vulgata');
            $table->unsignedSmallInteger('vulgata_verse');
            $table->string('psalm_link')->nullable();

            // Trigramma (numerologia)
            $table->unsignedSmallInteger('trigram_sum');
            $table->unsignedTinyInteger('trigram_reduction');

            // Contenuti testuali
            $table->text('quality');
            $table->text('help');
            $table->text('prevent')->nullable();
            $table->text('keywords');

            // Polarità energetica
            $table->string('energy', 10); // Maschile / Femminile

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angels_meanings');
    }
};
