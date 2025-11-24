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
        Schema::create('pythagoric_meanings', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Tipo di numero: 'life_path', 'expression', 'soul_urge', 'personality', 'birth_day', 'maturity', 'balance', 'karmic_lesson', 'hidden_passion', ecc.
            $table->string('number_type', 50);
            // Valore numerico: 1–9, 11, 22, 33, ecc.
            $table->tinyInteger('number_value');
            // Lingua (es. it-IT, en-US)
            $table->char('locale', 5)->default('it-IT');
            // Campi testuali
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->mediumText('long_description')->nullable();
            // Metadati extra in JSON (es. parole chiave, archetipi, etc.)
            $table->json('metadata')->nullable();

            $table->unique(['number_type', 'number_value', 'locale'], 'uniq_type_value_locale');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pythagoric_meanings');
    }
};
