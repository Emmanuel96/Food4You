<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrasItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create a table to store the extras for each restaurant
        Schema::create('extras_items', function(Blueprint $table)
        {
            $table->increments('extras_items_id'); 
            $table->integer('restaurant_id'); 
            $table->integer('menu_item_id'); 
            $table->integer('extras_item_added_price'); 
            $table->string('extra_item_name'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop table 
        Schema::drop('extras_items'); 
    }
}
