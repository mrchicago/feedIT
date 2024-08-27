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
        Schema::create('order_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('order_id')->constrained();
            $table->foreignId('dish_id')->constrained();
            $table->integer('amount');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_entries');
    }
};
