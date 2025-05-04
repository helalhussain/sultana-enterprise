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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 50)->default('Hello');
            $table->string('address',100)->nullable();
            $table->string('address_bn',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('contact_no',100)->nullable();
            $table->string('contact_no_bn',100)->nullable();
            $table->string('office_time',100)->nullable();
            $table->string('office_time_bn',100)->nullable();
            $table->string('timezone', 50)->nullable();
            $table->string('logo')->nullable();
            $table->string('dark_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('default_image')->nullable();
            $table->boolean('force_ssl')->default(false)->comment('0: disabled, 1: active');
            $table->boolean('secure_password')->default(false)->comment('0: disabled, 1: active');
            $table->boolean('agree')->default(false)->comment('0: disabled, 1: active');
            $table->boolean('registration')->default(false)->comment('0: Off, 1: On');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
