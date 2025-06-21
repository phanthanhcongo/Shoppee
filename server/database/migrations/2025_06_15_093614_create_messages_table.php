<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained('chatsessions')->onDelete('cascade');
            $table->unsignedBigInteger('sender_id');
            $table->text('content')->nullable();
            $table->timestamp('sent_at')->nullable();

            // Không ràng buộc sender_id vì có thể là customer hoặc seller
        });
    }

    public function down(): void {
        Schema::dropIfExists('messages');
    }
};
