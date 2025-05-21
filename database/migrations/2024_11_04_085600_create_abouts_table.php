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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('about_us')->nullable();
            $table->longText('about_us_bn')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->longText('about_owner')->nullable();
            $table->longText('about_owner_bn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
