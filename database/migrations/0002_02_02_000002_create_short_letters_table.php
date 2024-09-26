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
            $table->foreignUlid('signature_id')->nullable();

            // properties
            $table->date('sent_at');
            $table->string('sent_from');
            $table->string('title');
            $table->string('description');
            $table->json('we_ask_for_options');
            $table->json('you_receive_this_process_options');
            $table->enum('status', [0, 1, 2, 3])
                ->default(0)
                ->comment('{0 => created today}, {1 => on the post way}, {2 => customer should received letter}, {3 => letter came back}');

            // timestamps
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
