<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\order; 
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        $orders = order::where('order_status', '=', 1)->orderBy('created_at', 'DESC')->get(); 

        $orders_count = order::where('order_status', '=', 1)->count(); 


        //get the orders for all views 
        View::share('restaurant_orders', $orders);
        View::share('restaurant_order_count', $orders_count);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         Schema::defaultStringLength(191);
    }
}
