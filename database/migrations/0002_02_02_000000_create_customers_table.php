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
            $table->ulid('id')
                ->primary();
            $table->foreignUlid('team_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            // properties
            $table->enum('salutation', ['male', 'female', 'divers', 'company', 'not_specified']);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('street');
            $table->string('house_number');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country')->nullable();

            // timestamps
            $table->timestamps();
        });

        Schema::create('customer_contacts', function (Blueprint $table) {
            // ids
            $table->ulid('id')
                ->primary();
            $table->foreignUlid('customer_id')
                ->constrained()
                ->cascadeOnDelete();

            // properties
            $table->enum('type', ['telephone', 'telephone_private', 'telephone_business', 'email', 'email_private', 'email_business']);
            $table->string('value');

            // timestamps
            $table->timestamps();
        });

        Schema::create('customer_signature', function (Blueprint $table) {
            // ids
            $table->id();
            $table->foreignUlid('signature_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('customer_id')->constrained()->cascadeOnDelete();

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
        Schema::dropIfExists('customer_contacts');
        Schema::dropIfExists('customer_signature');
    }
};
