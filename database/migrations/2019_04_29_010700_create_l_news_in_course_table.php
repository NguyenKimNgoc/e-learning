<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLNewsInCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_news_in_course', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('news_name');
            $table->string('slug_news');
            $table->string('new_image');
            $table->string('video_news')->nullable();
            $table->text('content');
            $table->integer('cate_id')->unsigned();
            $table->integer('cate_group_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->boolean('status_news')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('delete_flag')->default(0);
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
        Schema::dropIfExists('l_news_in_course');
    }
}
