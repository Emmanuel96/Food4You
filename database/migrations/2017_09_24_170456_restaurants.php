<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function(BluePrint $table)
        {
            $table->integer('restaurant_id'); 
            $table->primary('restaurant_id');
            $table->string('restaurant_name'); 
            $table->string('restaurant_image'); 
            $table->time('restaurant_opening_times');
            $table->boolean('restaurant_status')->default(0);
            $table->string('restaurant_minimum_order');
            $table->string('restaurant_delivery_fee');
            $table->string('restaurant_phone_number');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurants'); 
    }
}
