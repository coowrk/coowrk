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
        Schema::create('coverages', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();
            $table->foreignUlid('team_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            // properties
            $table->string('contract_number');
            $table->json('sections');
            $table->boolean('existing_contracts')->default(false);
            $table->boolean('coverage_finished')->default(false);

            // timestamps
            $table->date('expiration_at');
            $table->date('coverable_at');
            $table->timestamps();
        });

        Schema::create('coverage_contract_number_patterns', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();

            // properties
            $table->string('pattern');
            $table->string('slug');
            $table->string('option');

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coverages');
        // Schema::dropIfExists('coverage_contract_number_patterns');
    }
};
