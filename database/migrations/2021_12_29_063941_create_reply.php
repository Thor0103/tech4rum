<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->bigIncrements('reply_id');
            $table->string('reply');
            $table->datetime('datetime');
            $table->unsignedBigInteger('comment_id')->nullable()->index();
            // $table->foreign('user_id')->references('topic_id')->on('user')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable()->index();
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
        Schema::dropIfExists('reply');
    }
}
