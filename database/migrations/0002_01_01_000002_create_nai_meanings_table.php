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
        Schema::create('nai_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('lang', 2);
            $table->string('code', 64);
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->json('meta')->nullable(); 

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nai_meanings');
    }
};
