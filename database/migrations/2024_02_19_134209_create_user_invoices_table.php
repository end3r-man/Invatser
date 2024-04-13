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
        Schema::create('user_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('client_id');
            $table->foreign('client_id')->references('id')->on('user_clients')->onDelete('cascade');
            $table->json('product')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('mtoal')->nullable();
            $table->string('balance')->nullable();
            $table->string('paid')->nullable();
            $table->string('create_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_invoices');
    }
};
