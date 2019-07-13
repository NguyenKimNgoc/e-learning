<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('l_courses', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('c_author_id')->unsigned();
            $table->string('c_title');
            $table->string('slug_course');
            $table->string('c_images');
            $table->integer('c_type_course')->unsigned();
            $table->integer('c_price');
            $table->integer('c_price_sale')->nullable();
            $table->boolean('c_hot')->nullable();
            $table->string('c_description');
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
        Schema::dropIfExists('l_courses');
    }
}
