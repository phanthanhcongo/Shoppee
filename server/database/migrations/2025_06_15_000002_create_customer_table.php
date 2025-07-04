<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('joined_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('customer');
    }
};
