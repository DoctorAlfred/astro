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
        Schema::create('plans', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('slug')->unique(); // es: 'free', 'basic', 'pro', 'premium'
           
            $table->string('it'); 
            $table->string('en');

            $table->string('desc_it', 240);
            $table->string('desc_en', 240);

            $table->integer('max_contacts')->default(0); // Limite contatti per il Customer
            $table->boolean('can_write_diary')->default(false); // Se l'utente finale può scrivere

            $table->decimal('price', 8, 2); // Prezzo base
            $table->decimal('tax', 5, 2)->default(22.00);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
