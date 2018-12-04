<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('buyer_name');
            $table->string('buyer_address'); 
            $table->string('buyer_phone_number');
            $table->string('order_status')->default('0');
            $table->boolean('delivery_status')->default('0');
            $table->string('order_slug');
            $table->string('payment_ref');
            $table->string('batch')->default('0');
            $table->string('days')->default('0');
            
            //$table->foreign('days')->references('days')->on('days_of_delivery');

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
        Schema::drop('orders');
    }
}
