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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->date('distribution_date');
            $table->string('resource_type');
            $table->integer('quantity');
            $table->string('location');
            $table->integer('beneficiaries');
            $table->string('distributed_by');
            $table->enum('status', ['distributed', 'pending', 'in-progress']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
