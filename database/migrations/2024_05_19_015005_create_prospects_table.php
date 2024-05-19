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
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prospect_id')->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('page_count')->nullable();
            $table->decimal('trim_size_1', 8, 2)->nullable();
            $table->decimal('trim_size_2', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospects');
    }
};
