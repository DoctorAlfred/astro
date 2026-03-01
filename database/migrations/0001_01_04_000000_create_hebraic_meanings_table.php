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
        Schema::create('hebraic_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->unsignedInteger('number')->unique();                // Ordine alfabetico 1–27

            // $table->string('letter', 2)->unique();
            $table->string('letter', 10)
                ->charset('utf8mb4')
                ->collation('utf8mb4_bin')
                ->unique();

            $table->boolean('is_primary')->default(true);
            $table->boolean('is_final')->default(false);
            $table->string('parent_letter', 2)->nullable()->index();

            $table->unsignedInteger('gematria_standard');               // 1–400
            $table->unsignedInteger('gematria_extended')->nullable();   // 500–900 (solo finali)

            $table->json('pronunciation');                              // Multilingua
            $table->json('proto_origin');                               // Origine proto-sinaitica
            $table->json('historical_development');                     // Evoluzione epigrafica
            $table->json('classification_sefer_yetzirah')->nullable();
            $table->json('traditional_symbolism')->nullable();          // Interpretazione mistica

            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_primary', 'is_final']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hebraic_meanings');
    }
};
