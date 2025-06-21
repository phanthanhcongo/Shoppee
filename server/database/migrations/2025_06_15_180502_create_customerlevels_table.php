<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('customerlevels', function (Blueprint $table) {
            $table->id();

            // Laravel tự hiểu customer_id → customer.id
            $table->foreignId('customer_id')->constrained('customer')->onDelete('cascade');

            $table->string('level_name', 50)->nullable(); // ví dụ: Bronze, Silver, Gold
            $table->timestamps(); // Khuyến khích thêm để tracking
        });
    }

    public function down(): void {
        Schema::dropIfExists('customerlevels');
    }
};
