<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            // Laravel tự hiểu user_id → users.id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // Laravel tự hiểu report_type_id → reporttypes.id
            $table->foreignId('report_type_id')->constrained('report_types')->onDelete('cascade');

            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reports');
    }
};
