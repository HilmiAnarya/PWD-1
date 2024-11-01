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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("img",255);
            $table->string("recipe_name",255);
            $table->json("ingredients");
            $table->json("steps");
            $table->string("creator_name", 255);
            $table->timestamp("publish_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe');
    }
};
