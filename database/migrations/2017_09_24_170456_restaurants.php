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
            $table->integer('restaurant_id')->default(0);
            $table->primary('restaurant_id');
            $table->integer('user_id')->default(1); 
            $table->string('restaurant_name'); 
            $table->string('restaurant_address')->default('Lagos'); 
            $table->string('restaurant_image'); 
            $table->string('header_image');
            $table->time('restaurant_opening_times');
            $table->time('restaurant_closing_times')->default('12:00');
            $table->boolean('restaurant_status')->default(0);
            $table->float('restaurant_minimum_order')->default(1000);
            $table->string('restaurant_delivery_fee')->default('500');
            $table->string('restaurant_phone_number');
            $table->date('updated_at')->default('2019-01-21 13:13:51'); 
            $table->date('created_at')->default('2019-01-21 13:13:51');
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
