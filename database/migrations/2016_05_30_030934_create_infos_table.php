<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mobile')->index();
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->integer('file_type')->index();
            $table->string('file');
            $table->string('thumb');
            $table->string('animation');
            $table->integer('like_num')->index();
            $table->integer('status')->index();
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
        Schema::drop('infos');
    }
}
