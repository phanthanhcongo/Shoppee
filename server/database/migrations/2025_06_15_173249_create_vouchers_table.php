<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->nullable()->unique();
            $table->decimal('discount_percent', 5, 2)->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('vouchers');
    }
};
