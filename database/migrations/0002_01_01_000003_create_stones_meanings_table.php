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
        Schema::create('stones_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Numero numerologico associato (1..9, 11, 22, 33)
            $table->integer('number')->nullable();
            // Dati non linguistici
            $table->float('hardness')->nullable(); // Scala Mohs

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stones_meanings');
    }
};
