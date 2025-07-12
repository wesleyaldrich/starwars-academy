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
        Schema::create('course_hero', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained('courses', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('hero_id')->constrained('heroes', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['course_id', 'hero_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_hero');
    }
};
