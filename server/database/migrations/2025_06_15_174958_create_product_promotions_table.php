<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('product_promotions', function (Blueprint $table) {
            $table->id(); // Primary key mặc định là 'id'

            // Laravel sẽ tự hiểu product_id tham chiếu products.id
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Laravel sẽ tự hiểu promotion_id tham chiếu promotions.id
            $table->foreignId('promotion_id')->constrained('promotions')->onDelete('cascade');

            $table->timestamps(); // Nên có nếu bạn muốn tracking thời gian
        });
    }

    public function down(): void {
        Schema::dropIfExists('product_promotions');
    }
};
