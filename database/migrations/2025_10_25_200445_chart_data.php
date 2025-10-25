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
         Schema::create('chart_data', function (Blueprint $table) {
            $table->id();
            $table->enum('chart_type', ['line', 'bar', 'pie', 'doughnut']);
            $table->string('dataset_name'); // monthly_revenue, user_growth, etc.
            $table->json('labels'); // ['Jan', 'Feb', 'Mar', ...]
            $table->json('datasets'); // [{label: '2024', data: [100,200,...]}]
            $table->json('options')->nullable();
            $table->timestamps();
            
            $table->index(['chart_type', 'dataset_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('chart_data');
    }
};
