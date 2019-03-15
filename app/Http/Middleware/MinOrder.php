<?php

namespace App\Http\Middleware;

use Closure;
use Session; 
use App\Restaurants; 
use Illuminate\Support\Facades\Auth;

class MinOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( ( Session::has('current_restaurant_id') == 1 )&& Session::get('current_restaurant_id') >= 0)
        {

            $restaurant = Restaurants::find(Session::get('current_restaurant_id'));
            $cart = Session::get('cart'); 
            if($cart != null)
            {
                $restaurant_min_order = $restaurant->restaurant_minimum_order;
                $current_cart_price = $cart->totalPrice; 

                
                 if($restaurant_min_order > $current_cart_price)
                 {
                    
                     return redirect('/menu/'. $restaurant->restaurant_name);   
                 }
            }
            //check if cart is not empty, if it's not empty 
            //check if the price in cart below the minimum order for the restaurant
            //if it's below, then take back to prevous url 
        }
        return $next($request);
    }
}
