<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_users', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('full_name');
            $table->string('slug_user');
            $table->boolean('user_group')->unsigned();
            $table->string('avatar');
            $table->integer('phone');
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('address');
            $table->boolean('major')->unsigned();
            $table->text('description')->nullable();
            $table->boolean('industries')->unsigned();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('birthday');
            $table->boolean('active');
            $table->boolean('delete_flag')->default(0);
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('l_users');
    }
}
