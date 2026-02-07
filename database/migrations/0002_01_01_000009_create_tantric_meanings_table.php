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
        Schema::create('tantric_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->unsignedTinyInteger('number');  // da 1 a 11
            $table->string('locale', 5);            // it, en...
            $table->string('name');
            $table->string('body');

            $table->json('meta')->nullable();
            $table->json('meaning')->nullable(); 
            $table->json('applications')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['number', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tantric_meanings');
    }
};
