<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cartitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('cart')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cartitems');
    }
};
