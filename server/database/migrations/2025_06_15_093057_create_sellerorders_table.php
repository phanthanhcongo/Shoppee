<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('seller_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('sellers')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('status', 50)->default('Pending');
            $table->timestamp('assigned_at')->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('seller_orders');
    }
};
