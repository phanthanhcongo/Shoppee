<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('variant_name', 100)->nullable();
            $table->decimal('original_price', 10, 2)->nullable(); // Giá gốc
            $table->decimal('final_price', 10, 2)->nullable();    // Giá sau giảm
            $table->bigInteger('stock_quantity')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('product_variants');
    }
};
