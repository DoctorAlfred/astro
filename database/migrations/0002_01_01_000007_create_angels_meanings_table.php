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
            $table->string('kabal_name');
            $table->string('trigram');
            $table->string('trigram_significate');

            $table->json('definition')->nullable();
            $table->json('new_definition')->nullable();
            $table->string('hebrew_letters', 10);
            $table->string('hebrew_name')->nullable();

            // Dettagli simbolici (JSON)
            $table->json('letter_details')->nullable();

            // Gerarchia angelica
            $table->string('choir')->nullable();
            $table->string('archangel')->nullable();
            $table->string('element')->nullable();

            $table->json('zodiac_days')->nullable();

            $table->string('orientation', 10)->default('EST');

            // Salmi
            $table->unsignedSmallInteger('psalm');
            $table->unsignedSmallInteger('psalm_verse');
            $table->unsignedSmallInteger('vulgata');
            $table->unsignedSmallInteger('vulgata_verse');
            $table->string('psalm_link')->nullable();

            $table->json('quality')->nullable();
            $table->json('help')->nullable();
            $table->json('prevent')->nullable();

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
