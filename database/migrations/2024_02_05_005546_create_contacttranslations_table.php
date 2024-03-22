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
        Schema::create('contacttranslations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id')->unsigned();
            $table->string('locale')->index(); // بتاعة اللغات ال ف السايت
            $table->string('title')->nullable();
            $table->text('location')->nullable();
            $table->text('keyword')->nullable();
            $table->text('slug')->nullable();
            $table->unique(['contact_id', 'locale']);  // ترجمه وحده للبوست
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacttranslations');
    }
};
