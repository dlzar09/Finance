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
        //
           Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('default_chart_type', ['line', 'bar', 'pie'])->default('line');
            $table->integer('refresh_interval')->default(300); // seconds
            $table->json('visible_metrics')->nullable();
            $table->json('dashboard_layout')->nullable();
            $table->timestamps();
            
            $table->unique('user_id'); // One-to-one relationship
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('user_preferences');
    }
};
