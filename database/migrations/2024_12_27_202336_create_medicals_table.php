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
        Schema::create('medicals', function (Blueprint $table) {
            $table->id(); 
            $table->string('shelter_name');
            $table->text('supplies');
            $table->text('personnel'); 
            $table->enum('status', ['active', 'completed']);
            $table->text('health_conditions'); 
            $table->string('response_team'); 
            $table->json('facilities'); 
            $table->date('last_assistance_date'); 
            $table->integer('people_served');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicals');
    }
};
