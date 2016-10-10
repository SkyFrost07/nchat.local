<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fanpage_id')->unsigned()->nullable();
            $table->integer('to_user_id')->unsigned()->nullable();
            $table->integer('to_fanpage_id')->unsigned()->nullable();
            $table->text('message');
            $table->boolean('is_read')->default(0);
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fanpage_id')->references('id')->on('fanpages')->onDelete('cascade');
            $table->foreign('to_fanpage_id')->references('id')->on('fanpages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
