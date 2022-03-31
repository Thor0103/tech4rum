<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->bigIncrements('image_id');
            $table->string('image');
            $table->unsignedBigInteger('topic_id')->nullable()->index();
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
        Schema::dropIfExists('image');
    }
}
