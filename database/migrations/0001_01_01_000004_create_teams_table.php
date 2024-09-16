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
        Schema::create('companies', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();

            // properties
            $table->string('name');

            // timestamps
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();
            $table->foreignUlid('company_id')->nullable()->constrained()->cascadeOnDelete();

            // properties
            $table->string('name');
            $table->string('slug');

            // timestamps
            $table->timestamps();
        });

        Schema::create('team_user', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();
            $table->foreignUlid('team_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('team_user');
    }
};
