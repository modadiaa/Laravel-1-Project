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
        Schema::create('prodnametranslations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prodname_id')->unsigned();
            $table->string('locale')->index(); // بتاعة اللغات ال ف السايت
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('keyword')->nullable();
            $table->unique(['prodname_id', 'locale']);  // ترجمه وحده للبوست
            $table->foreign('prodname_id')->references('id')->on('prodnames')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodnametranslations');
    }
};
