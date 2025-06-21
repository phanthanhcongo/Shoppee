<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('report_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name', 100)->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('report_types');
    }
};
