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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile')->default('assets/images/profile/pf.png');
            $table->string('role')->default('user');
            $table->string('company')->nullable();
            $table->integer('phone')->nullable();
            $table->json('address')->nullable();
            $table->string('timezone')->default('Asia/Kolkata');
            $table->string('currency')->nullable();
            $table->json('noti')->nullable();
            $table->boolean('email_verified')->default(false);
            $table->string('password');
            $table->timestamp('deletep')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
