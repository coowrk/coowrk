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
        Schema::create('short_letters', function (Blueprint $table) {
            // ids
            $table->ulid('id')->primary();
            $table->foreignUlid('team_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('signature_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            // properties
            $table->string('sent_from');
            $table->string('title');
            $table->string('description');
            $table->json('we_ask_for_options');
            $table->json('you_receive_this_process_options');
            $table->enum('status', ['not_send_yet', 'on_the_post_way', 'presumably_with_the_customer', 'postal_return', 'archived'])
                ->default('not_send_yet');

            // timestamps
            $table->date('sent_at');
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
