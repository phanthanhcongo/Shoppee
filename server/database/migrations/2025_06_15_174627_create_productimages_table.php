<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id(); // Khóa chính mặc định là 'id'
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('image_url', 500)->nullable();
            $table->boolean('is_thumbnail')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('product_images');
    }
};
