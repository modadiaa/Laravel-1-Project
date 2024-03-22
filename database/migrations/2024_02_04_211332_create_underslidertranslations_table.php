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
        Schema::create('underslidertranslations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('underslider_id')->unsigned();
            $table->string('locale')->index(); // بتاعة اللغات ال ف السايت
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('bgcolor');
            $table->unique(['underslider_id', 'locale']);  // ترجمه وحده للبوست
            $table->foreign('underslider_id')->references('id')->on('undersliders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('underslidertranslations');
    }
};
