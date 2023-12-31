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
        Schema::create('opdrachten', function (Blueprint $table) {
            $table->id()->index();
            $table->integer('user_id')->nullable();
            $table->string('opdracht_naam')->unique();
            $table->string('opdracht_beschrijving');
            $table->string('opdracht_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opdrachten');
    }
};
