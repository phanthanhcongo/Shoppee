<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reward_transactions', function (Blueprint $table) {
            $table->id();

            // Laravel tự hiểu customer_id → customer.id
            $table->foreignId('customer_id')->constrained('customer')->onDelete('cascade');

            $table->integer('points')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reward_transactions');
    }
};
