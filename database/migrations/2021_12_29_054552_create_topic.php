<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->bigIncrements('topic_id');
            $table->string('title');
            $table->longText('content');
            $table->datetime('datetime');
            $table->string('category');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            // $table->foreign('user_id')->references('topic_id')->on('user')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable()->index();
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
        Schema::dropIfExists('topic');
    }
}
