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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255);
            $table->string('nama_panggilan', 255);
            $table->string('email', 255);
            $table->string('nomor_telepon', 15);
            $table->string('jalur', 255);
            $table->text('image');
            $table->string('program_study1', 255);
            $table->string('program_study2', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
