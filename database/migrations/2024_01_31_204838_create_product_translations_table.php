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
        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('locale')->index(); // بتاعة اللغات ال ف السايت
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('keyword')->nullable();
            $table->text('smalldesc')->nullable();
            $table->unique(['product_id', 'locale']);  // ترجمه وحده للبوست
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translations');
    }
};
