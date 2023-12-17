<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_pets', function (Blueprint $table) {
            $table->id();
            $table->string("title")-> nullable();
            $table->string("type")-> nullable();
            $table->string("breed")-> nullable();
            $table->string("gender")-> nullable();
            $table->string("number")-> nullable();
            $table->string("user")-> nullable();
            $table->string("image")-> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_pets');
    }
};