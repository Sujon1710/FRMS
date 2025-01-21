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
        Schema::create('crisis_categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('cat_name');
            $table->text('description'); 
            $table->enum('severity_level', ['Low', 'Medium', 'High', 'Critical']);
            $table->string('region_impacted')->nullable(); 
            $table->string('resource_needs')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crisis_categories');
    }
};
