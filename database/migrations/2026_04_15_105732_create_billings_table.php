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
        Schema::create('billings', function (Blueprint $table) {
          $table->id();
          $table->text('template_text')->nullable();
          $table->foreignId('client_id')->nullable()
                ->constrained('clients')->nullOnDelete();
          $table->foreignId('case_number')->nullable()
                ->constrained('legal_cases', 'case_number')->nullOnDelete();
          $table->string('month', 20)->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
