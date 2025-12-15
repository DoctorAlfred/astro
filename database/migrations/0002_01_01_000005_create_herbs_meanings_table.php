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

            $table->string('name');                     // es: "Edera"
            $table->string('latin_name')->nullable();   // es: "Hedera helix"
            $table->string('family')->nullable();       // es: "Araliaceae"

            // Parti usate tradizionalmente: foglie, radici, bacche...
            $table->json('used_parts')->nullable();
            // Principi attivi / valori nutrizionali / componenti chimici
            $table->json('nutritional_values')->nullable();
            // Proprietà riconosciute/studiate (fitoterapia, farmacologia)
            $table->json('scientific_properties')->nullable();
            // Usi curativi tradizionali (sempre con prudenza)
            $table->json('curative_uses')->nullable();
            // Simbolismo, magia naturale, significati esoterici
            $table->json('esoteric_properties')->nullable();
            // Corrispondenze occulte (pianeti, elementi, chakra, ecc.)
            $table->json('occult_correspondences')->nullable();
            // Avvertenze, tossicità, note importanti
            $table->text('warnings')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
