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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('ASIN', 10)->index();
            $table->string('ISBN13', 13)->nullable();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('manufacturer')->nullable();
            $table->dateTime('publication_date')->nullable();
            $table->string('binding')->nullable();
            $table->string('format')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
