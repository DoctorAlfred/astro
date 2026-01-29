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
        Schema::create('salm_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('salm_name');
            $table->string('salm_period')->nullable();
            $table->unsignedSmallInteger('salm_number')->unique();

            $table->json('salm_orig');
            $table->json('lang');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salm_meanings');
    }
};
