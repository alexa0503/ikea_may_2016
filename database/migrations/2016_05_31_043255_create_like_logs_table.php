<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('info_id')->unsigned()->references('id')->on('users');
            $table->datetime('created_time');
            $table->string('created_ip');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('like_logs');
    }
}
