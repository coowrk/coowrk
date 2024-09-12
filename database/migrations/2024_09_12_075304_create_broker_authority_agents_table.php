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
        Schema::create('broker_authority_agents', function (Blueprint $table) {
            // ids
            $table->id();

            // variables
            $table->string('name');
            $table->string('street');
            $table->string('house_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('logo')->nullable();

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broker_authority_agents');
    }
};
