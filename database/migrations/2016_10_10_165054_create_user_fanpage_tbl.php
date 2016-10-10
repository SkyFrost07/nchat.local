<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFanpageTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fanpage', function (Blueprint $table) {
           $table->integer('user_id')->unsigned();
           $table->integer('fanpage_id')->unsigned();
           $table->tinyInteger('role_id')->default(2);
           $table->tinyInteger('status')->default(1);
           $table->primary(['user_id', 'fanpage_id']);
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('fanpage_id')->references('id')->on('fanpages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_fanpage');
    }
}
