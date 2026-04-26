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
        Schema::create('correspondences', function (Blueprint $table) {
          $table->id();
          $table->foreignId('case_id')->nullable()
                ->constrained('legal_cases', 'case_id')->nullOnDelete();
          $table->string('status', 50)->nullable();
          $table->date('date')->nullable();
          $table->text('letter')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correspondences');
    }
};
