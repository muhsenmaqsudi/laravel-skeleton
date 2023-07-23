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
        Schema::create('transactions', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('user_id')->nullable()->index();
            $table->string('wallet_id', 36)->index();
            $table->string('tracker', 36)->nullable();
            $table->decimal('amount', 15);
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
