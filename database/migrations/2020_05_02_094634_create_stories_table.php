<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('name');// tên truyện
            $table->string('author');//tác giả
            $table->string('publisher');//công ty xuất bản
            $table->string('source');//nguồn truyện
            $table->integer('episode');// số tập
            $table->string('status');// tình trạng
            $table->longText('summary');// tóm tắt
            $table->longText('content');// nội dung
            $table->integer('number_of_reads');// so lần đọc
            $table->integer('number_of_downloads');// số lần tải
            $table->bigInteger('category_id')->unsigned();// id thể loại
            $table->bigInteger('user_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('stories', function(Blueprint $table) {
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
