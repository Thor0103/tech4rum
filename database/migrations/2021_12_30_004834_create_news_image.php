<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_image', function (Blueprint $table) {
            $table->bigIncrements('news_image_id');
            $table->string('news_image');
            $table->unsignedBigInteger('news_id')->nullable()->index();
            // $table->foreign('user_id')->references('topic_id')->on('user')->onDelete('cascade');
            // $table->foreign('category_id')->references('topic_id')->on('category')->onDelete('cascade');
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
        Schema::dropIfExists('news_image');
    }
}
