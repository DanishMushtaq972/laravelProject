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
        Schema::create('mygoproprodds', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Price');
            $table->string('images');
            $table->string('Brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mygoproprodds');
    }
};
