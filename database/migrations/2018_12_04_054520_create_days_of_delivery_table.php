<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysOfDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days_of_delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('monday')->unsigned();
            $table->integer('tuesday')->unsigned();
            $table->integer('wednesday')->unsigned();
            $table->integer('thursday')->unsigned();
            $table->integer('friday')->unsigned();
            $table->integer('saturday')->unsigned();
            $table->integer('sunday')->unsigned();

            $table->string('days')->default('0');

            $table->boolean('available');

            $table->integer('restaurant_id')->default('0');
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurants');

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
        Schema::dropIfExists('days_of_delivery');
    }
}
