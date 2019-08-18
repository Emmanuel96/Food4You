<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestDeliveryPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_del_price', function(Blueprint $table){
            $table->increments('id'); 
            $table->integer('state_id'); 
            $table->integer('area_id'); 
            $table->integer('restaurant_id');
            $table->integer('price'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rest_del_price');
    }
}
