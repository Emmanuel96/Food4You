<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function(BluePrint $table)
        {
            $table->increments('id'); 
            $table->integer('order_id');
            $table->integer('restaurant_id'); 
            $table->integer('product_id');
            $table->integer('qty_ordered');
            $table->string('order_extras')->nullable(true); 
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
        Schema::drop('order_products');
    }
}
