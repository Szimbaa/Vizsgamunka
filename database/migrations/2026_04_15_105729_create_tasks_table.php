<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
          $table->id();
          $table->foreignId('case_id')->nullable()
                ->constrained('legal_cases', 'case_id')->nullOnDelete();
          $table->date('deadline')->nullable();
          $table->text('task')->nullable();
          $table->string('attachment', 200)->nullable();
          $table->string('sender_name', 100)->nullable();
          $table->string('receiver_name', 100)->nullable();
          $table->decimal('work_hours', 5, 2)->default(0.00);
          $table->boolean('completed')->default(0);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
