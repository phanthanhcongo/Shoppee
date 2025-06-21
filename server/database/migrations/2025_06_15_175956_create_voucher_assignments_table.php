<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('voucher_assignments', function (Blueprint $table) {
            $table->id();

            // Laravel hiểu voucher_id → vouchers.id
            $table->foreignId('voucher_id')->constrained('vouchers')->onDelete('cascade');

            // Laravel hiểu customer_id → customer.id
            $table->foreignId('customer_id')->constrained('customer')->onDelete('cascade');

            $table->timestamps(); // nên có để tracking thời gian sử dụng
        });
    }

    public function down(): void {
        Schema::dropIfExists('voucher_assignments');
    }
};
