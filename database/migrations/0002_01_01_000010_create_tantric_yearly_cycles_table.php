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
        Schema::create('tantric_yearly_cycles', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->unsignedTinyInteger('number')
                ->comment('Tantric number (1–11)');
            $table->string('locale', 5)
                ->comment('Locale code, e.g. it, en');
            $table->text('energy')
                ->comment('Yearly energetic theme');
            $table->text('advice')
                ->comment('Practical guidance for the year');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['number', 'locale'], 'tantric_yearly_number_locale_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tantric_yearly_cycles');
    }
};
