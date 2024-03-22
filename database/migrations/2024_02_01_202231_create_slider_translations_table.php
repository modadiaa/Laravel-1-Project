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
        Schema::create('slider_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slider_id')->unsigned();
            $table->string('locale')->index(); // بتاعة اللغات ال ف السايت
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->unique(['slider_id', 'locale']);  // ترجمه وحده للبوست
            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_translations');
    }
};
