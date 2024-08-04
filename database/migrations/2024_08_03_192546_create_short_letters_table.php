<?php

use App\Models\Customer;
use App\Models\User;
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
        Schema::create('short_letters', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('street');
            $table->string('house_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('reason');
            $table->json('options');
            $table->string('pdf_path');
            $table->foreignIdFor(User::class)->comment('short letter created by (user)_id');
            $table->foreignIdFor(Customer::class)->comment('short letter belongs to (customer)_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('short_letters');
    }
};
