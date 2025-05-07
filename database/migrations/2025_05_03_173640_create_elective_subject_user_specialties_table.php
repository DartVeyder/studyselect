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
        Schema::create('elective_subject_user_specialties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_specialty_id')->constrained('user_specialties');
            $table->foreignId('elective_post_id')->constrained('elective_subject_posts');
            $table->foreignId('elective_subject_id')->constrained('elective_subjects');
            $table->integer('priority')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elective_subject_user_specialties');
    }
};
