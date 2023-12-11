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
        Schema::create('opdracht_answer', function (Blueprint $table) {
            $table->id()->index();
            $table->string('opdracht_id');
            $table->integer('user_id')->nullable();
            $table->array('opdracht_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opdracht_answer');
    }
};
