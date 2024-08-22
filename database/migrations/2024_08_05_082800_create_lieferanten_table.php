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
        Schema::create('lieferanten', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->string('house_number');
            $table->string('plz');
            $table->boolean('delivers');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lieferanten');
    }
};
