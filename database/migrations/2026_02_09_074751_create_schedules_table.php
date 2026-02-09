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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $table->foreignId('instructor_id')->constrained('users');

            // Use an integer (0-6) or enum for the day
            $table->json('day_of_week');

            $table->time('start_time');
            $table->time('end_time');

            // Optional: Only if the schedule is for a specific semester
            $table->string('semester')->nullable();
            $table->year('academic_year')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
