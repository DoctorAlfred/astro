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
        Schema::create('address_book_customer', function (Blueprint $table) {
            $table->uuid('customer_id');
            $table->uuid('address_book_id');

            $table->timestamps();

            $table->primary(['customer_id', 'address_book_id']);

            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');

            $table->foreign('address_book_id')
                ->references('id')->on('address_books')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_book_customer');
    }
};
