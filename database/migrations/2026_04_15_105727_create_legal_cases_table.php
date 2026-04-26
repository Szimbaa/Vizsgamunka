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
        Schema::create('legal_cases', function (Blueprint $table) {
          $table->id('case_id');
          $table->foreignId('client_id')->nullable()
                ->constrained('clients')->nullOnDelete();
          $table->foreignId('user_id')->nullable()
                ->constrained('users')->nullOnDelete();
          $table->string('opposing_party', 100)->nullable();
          $table->string('case_title', 150)->nullable();
          $table->string('case_type', 50)->nullable();
          $table->text('description')->nullable();
          $table->string('status', 50)->nullable();
          $table->string('fre', 50)->nullable();
          $table->decimal('total_work_hours', 5, 2)->nullable();
          $table->date('deadline')->nullable();
          $table->string('notification', 50)->nullable();
          $table->date('date')->nullable();
          $table->boolean('closed')->default(0);
          $table->decimal('elapsed_hours', 5, 2)->default(0.00);
          $table->dateTime('work_start')->nullable();
          $table->dateTime('work_end')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_cases');
    }
};
