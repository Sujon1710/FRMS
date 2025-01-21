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
        Schema::create('donations', function (Blueprint $table) {
    $table->id();
    $table->foreignId('donar_id')->constraint('donars')->onDelete('cascade');
    $table->foreignId('crisis_id')->constraint('crises')->onDelete('cascade'); 
    $table->decimal('amount', 10, 2);
    $table->string('payment_method');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
