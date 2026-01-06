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
        Schema::create('sub_category_meanings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->integer('cat_number');

            $table->string('slug');
            $table->string('it');
            $table->string('en');
            $table->string('desc_it', 240)->nullable();
            $table->string('desc_en', 240)->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cat_number')->references('number')->on('category_meanings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_category_meanings');
    }
};
