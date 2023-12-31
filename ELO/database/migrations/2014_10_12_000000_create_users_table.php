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
            $table->id()->index();
            $table->string('first_name')->nullable();
            $table->string('prefix')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('student_number')->unique();
            $table->string('class_name')->index();
            $table->string('password');
            $table->string('image')->default('profileimage\default.png')->nullable();
            $table->string('role')->default('student');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('class_name')->references('class_name')->on('klassen')->onUpdate('cascade');
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
