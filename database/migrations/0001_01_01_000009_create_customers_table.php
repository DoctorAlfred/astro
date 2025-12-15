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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();

                $table->foreignUuid('user_id')->constrained()->onDelete('cascade');

                $table->enum('type', [
                    'private',
                    'commercial',
                    'retailer',
                    'astro'
                ])->default('commercial');
                $table->string('company')->nullable();              // Company Name
                $table->string('email')->nullable();                // Working email
                $table->string('phone')->nullable();                // Working phone
                $table->string('address')->nullable();              // Working address 
                $table->unsignedBigInteger('city_id')->nullable();  // Working city
                $table->string('country')->nullable();              // Country Code 
                $table->string('vat')->nullable();                  // Vat Number 
                $table->string('identity_number')->nullable();      // Identity - Document Number 
                $table->boolean('completed')->nullable();           // Completed Data
                $table->json('metadata')->nullable();

                $table->timestamps();
                $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
