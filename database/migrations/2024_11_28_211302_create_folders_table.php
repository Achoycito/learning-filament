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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('parent_id')->nullable(); // Relación recursiva
            $table->foreign('parent_id')->references('id')->on('folders');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
