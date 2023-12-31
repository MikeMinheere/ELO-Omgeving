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
        Schema::create('opdracht_multiple_choice', function (Blueprint $table) {
            $table->id();
            $table->string("opdracht_naam")->reference("opdracht_naam")->on("opdrachten");
            $table->integer("student")->reference("student_number")->on("users");
            $table->string("answer")->reference("string_answer")->on("opdracht_answers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opdracht_multiple_choice');
    }
};
