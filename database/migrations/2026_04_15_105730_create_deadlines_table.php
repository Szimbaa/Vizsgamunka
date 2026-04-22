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
        Schema::create('deadlines', function (Blueprint $table) {
          $table->id();
          $table->foreignId('case_number')->nullable()
                ->constrained('legal_cases', 'case_number')->nullOnDelete();
          $table->foreignId('client_id')->nullable()
                ->constrained('clients')->nullOnDelete();
          $table->date('date')->nullable();
          $table->time('time')->nullable();
          $table->text('description')->nullable();
          $table->string('location', 100)->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deadlines');
    }
};
