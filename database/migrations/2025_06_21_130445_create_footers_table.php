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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(false);
            $table->string('link_instagram')->nullable(false);
            $table->string('link_youtube')->nullable(false);
            $table->string('link_linkedin')->nullable(false);
            $table->string('link_facebook')->nullable(false);
            $table->string('alamat')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('wa')->nullable(false);
            $table->string('link_gmaps')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
