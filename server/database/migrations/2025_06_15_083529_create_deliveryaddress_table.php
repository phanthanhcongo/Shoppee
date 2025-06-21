<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer')->onDelete('cascade');
            $table->string('recipient_name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('address');
        });
    }

    public function down(): void {
        Schema::dropIfExists('delivery_addresses');
    }
};
