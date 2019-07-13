<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_orders', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('order_code')->unsigned();
            $table->integer('city_id');
            $table->integer('district_id');
            $table->integer('payment');
            $table->text('note_order');
            $table->integer('total_number');
            $table->boolean('status')->default(0);
            $table->boolean('deleted_flag')->default(0);
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
        Schema::dropIfExists('l_orders');
    }
}
