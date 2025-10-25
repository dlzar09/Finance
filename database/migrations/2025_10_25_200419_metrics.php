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
         Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name'); // revenue, users, orders, etc.
            $table->decimal('value', 15, 2);
            $table->decimal('previous_value', 15, 2)->default(0);
            $table->decimal('change_percentage', 5, 2)->default(0);
            $table->enum('change_direction', ['up', 'down', 'neutral'])->default('neutral');
            $table->string('icon')->default('📊');
            $table->string('color')->default('blue');
            $table->timestamps();
            
            $table->index(['user_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('metrics');
    }
};