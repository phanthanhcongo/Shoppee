<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('shipper_id')->constrained('shippers')->onDelete('cascade');
            $table->string('delivery_status', 50)->nullable();
            $table->timestamp('assigned_at')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('deliveries');
    }
};

