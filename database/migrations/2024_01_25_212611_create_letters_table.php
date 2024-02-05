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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('topic');
            $table->text('description');
            $table->integer('status')->default(0);
            $table->json('checked')->nullable();
            $table->foreignIdFor(\App\Models\Customer::class);
            $table->string('salutation');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('street');
            $table->string('street_number');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country');
            $table->foreignIdFor(\App\Models\User::class, 'created_by');
            $table->foreignIdFor(\App\Models\User::class, 'updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
