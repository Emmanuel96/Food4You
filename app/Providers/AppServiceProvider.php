<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\order; 
use View;
use Illuminate\Support\Facades\Auth;

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

        View::share('restaurant_orders', $orders);
        View::share('restaurant_order_count', $orders_count);
        

        // if(Auth::user() != null && (Auth::user()->user_role == 1 || Auth::user()->user_role == 3))
        // {
        //     $orders = order::where('order_status', '=', 1)->orderBy('created_at', 'DESC')->get(); 

        //     $orders_count = order::where('order_status', '=', 1)->count();

        //     //get the user id from the auth user
        //     $user_id =  ; 

        //     $restaurant = Restaurant::where('user_id', '=', $user_id)->first(); 

        //     $restaurant_id = $restaurant->restaurant_id;

        //      //get the orders for all views 
        //     View::share('restaurant_orders', $orders);
        //     View::share('restaurant_order_count', $orders_count);
        //     View::share('restauant', $restaurant);
            
        // }
       


       
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
