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
            $table->foreignIdFor(User::class)->comment('short letter created by (user)_id');
            $table->foreignIdFor(Customer::class)->comment('short letter belongs to (customer)_id');
            $table->string('reason');
            $table->string('description');
            $table->string('we_ask_for');
            $table->string('go_in_action');
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
