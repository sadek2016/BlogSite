<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat',150);
            $table->string('title');
            $table->text('body');
            $table->string('image');
            $table->string('tag');
            $table->string('author',100);
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
        Schema::drop('tbl_post');
    }
}
