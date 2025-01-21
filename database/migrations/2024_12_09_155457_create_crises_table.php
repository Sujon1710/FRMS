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
        Schema::create('crises', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description'); 
            $table->string('location'); 
            $table->date('start_date'); 
            $table->date('end_date')->nullable(); 
            $table->enum('category', ['Flood', 'Earthquake', 'Fire', 'Storm', 'Other']); 
            $table->integer('severity_level'); 
            $table->integer('affected_people'); 
            $table->decimal('raise_amount')->default(0); 
            $table->decimal('budget')->default(0); 
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crises');
    }
};
