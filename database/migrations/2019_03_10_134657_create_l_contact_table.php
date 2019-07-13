<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone');
            $table->string('address');
            $table->string('map');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('linkedin');
            $table->boolean('delete_flag');
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
        Schema::dropIfExists('l_contact');
    }
}
