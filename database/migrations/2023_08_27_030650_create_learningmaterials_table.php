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
        Schema::create('learningmaterials', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('teacher');
            $table->text('course');
            $table->text('keywords')->nullable();
            $table->text('access_code');
            $table->longText('content');
            $table->text('files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learningmaterials');
    }
};
