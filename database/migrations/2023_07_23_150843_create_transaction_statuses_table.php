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
        Schema::create('transaction_statuses', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('transaction_id')->index()->constrained()->cascadeOnDelete();
            $table->string('status')->index();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_statuses');
    }
};
