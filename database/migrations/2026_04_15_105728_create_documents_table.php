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
        Schema::create('documents', function (Blueprint $table) {
          $table->id();
          $table->foreignId('client_id')->nullable()
                ->constrained('clients')->nullOnDelete();
          $table->foreignId('case_number')->nullable()
                ->constrained('legal_cases', 'case_number')->nullOnDelete();
          $table->string('document_type', 50)->nullable();
          $table->date('upload_date')->nullable();
          $table->text('note')->nullable();
          $table->string('file', 200)->nullable();
          $table->boolean('is_invoice')->nullable();
          $table->string('sender', 100)->nullable();
          $table->string('recipient', 100)->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
