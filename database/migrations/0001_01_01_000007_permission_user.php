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
        Schema::create('permission_user', function (Blueprint $table)
        {
            // $table->uuid('id')->primary();
            $table->bigIncrements('id');

            $table->uuid('permission_id')->constrained('permissions');
            $table->uuid('user_id')->constrained('users');

            $table->bigInteger('level')->default(1);
            $table->boolean('is_active')->default(false);
            $table->boolean('is_banned')->default(false);
            $table->boolean('first_in')->default(true);
            $table->boolean('first_login')->default(true);

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_user');
    }
};
