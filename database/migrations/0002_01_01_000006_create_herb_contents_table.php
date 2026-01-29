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
        Schema::create('herb_contents', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relazione con herbs_meanings
            $table->uuid('herbs_meaning_id');

            // Tipologia del contenuto (history, benefits, scientific_studies, ecc.)
            $table->string('type');

            // Lingua del contenuto (it | en)
            $table->string('language', 2);

            // Titolo del contenuto
            $table->string('title')->nullable();

            // Contenuto testuale esteso
            $table->longText('content');

            // Tipo di fonte (scientific, traditional, religious, esoteric, folk, mixed)
            $table->string('source_type')->nullable();

            // Livello di evidenza (high, medium, low, none)
            $table->string('evidence_level')->nullable();

            // Riferimento fonte (testo libero o URL descrittivo)
            $table->text('source_reference')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Foreign key
            $table->foreign('herbs_meaning_id')
                ->references('id')
                ->on('herbs_meanings')
                ->onDelete('cascade');

            // Indici utili per query e API
            $table->index(['type', 'language']);
            $table->index('source_type');
            $table->index('evidence_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herb_contents');
    }
};
