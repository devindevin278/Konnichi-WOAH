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
        Schema::create('bubblechats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notebook_id')->references('id')->on('notebooks');
            $table->string('kanji');
            $table->string('japan');
            $table->string('english');
            $table->string('position');
            $table->string('audio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bubblechats');
    }
};
