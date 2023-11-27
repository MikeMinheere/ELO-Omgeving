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
        Schema::create('inlever_bestanden', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filepath');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('opdracht_id')->unsigned();
        });

        Schema::table('inlever_bestanden', function($table) {
            
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('opdracht_id')->references('id')->on('opdrachten')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inlever_bestanden');
    }
};
