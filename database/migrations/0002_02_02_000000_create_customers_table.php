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
            // ids
            $table->ulid('id')->primary();
            $table->foreignUlid('team_id')->constrained()->cascadeOnDelete();

            // properties
            $table->string('salutation')->enum(['male', 'female', 'divers', 'company', 'not_specified']);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('street');
            $table->string('house_number');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country');

            // timestamps
            $table->timestamps();
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
