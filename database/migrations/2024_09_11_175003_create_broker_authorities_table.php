<?php

use App\Models\BrokerAuthorityAgent;
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
        Schema::create('broker_authorities', function (Blueprint $table) {
            // ids
            $table->id();
            $table->foreignIdFor(User::class)->comment('short letter created by (user)_id');
            $table->foreignIdFor(Customer::class)->comment('short letter belongs to (customer)_id');
            $table->foreignIdFor(BrokerAuthorityAgent::class)->comment('broker-authority belongs to this broker_authority_(agent)_id');

            // variables
            $table->string('signed_city');
            $table->date('signed_at');
            $table->text('signature');

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broker_authorities');
    }
};
