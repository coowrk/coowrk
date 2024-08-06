<?php

use App\Models\ShortLetter;
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
        Schema::create('short_letter_feeds', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ShortLetter::class)->comment('associated short letter');
            $table->foreignIdFor(User::class)->comment('created by user')->nullable();
            $table->integer('new_status')->nullable();
            $table->string('title');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('short_letter_feeds');
    }
};
