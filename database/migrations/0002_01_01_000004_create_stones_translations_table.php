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
        Schema::create('stones_translations', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->unsignedBigInteger('stones_meaning_id');

            $table->string('language', 5);              // 'it', 'en', ecc.
            $table->string('name');                     // Ametista / Amethyst
            $table->string('origin')->nullable();       // Brasile / Brazil
            $table->string('type')->nullable();         // Quarzo / Quartz
            $table->string('color')->nullable();        // Viola / Purple
            $table->string('chakra')->nullable();       // Terzo occhio / Third Eye
            $table->string('zodiac_signs')->nullable(); // Pesci, Sagittario / Pisces, Sagittarius

            $table->text('description')->nullable();
            $table->text('usage')->nullable();

            $table->json('powers')->nullable();         // ['protezione', 'vegenza'] / ['protection', 'clairvoyance']

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('stones_meaning_id')
                ->references('id')
                ->on('stones_meanings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stones_translations');
    }
};
