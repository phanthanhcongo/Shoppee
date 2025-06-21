<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('delivery_tracking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('deliveries')->onDelete('cascade');
            $table->string('status', 100)->nullable();
            $table->timestamp('timestamp')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('delivery_tracking');
    }
};
