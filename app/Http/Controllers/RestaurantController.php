<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session; 
use App\Restaurants; 
use App\order;
use Auth; 
use DB;

class RestaurantController extends Controller
{
    public function restaurantsPage(Request $request)
    {
    	//return Auth::user(); 
    	//get all the restaurants fromt the DB and return it 
		$restaurants = DB::table('restaurants')->paginate(20);
		
		$area_id = $request->area;
		$state_id = $request->state; 

		if(!Session::has('area_id')){
			Session::put('area_id', $area_id); 
		}
		if(!Session::has('state_id')){
			Session::put('state_id', $state_id); 
		}

		$price = DB::table('rest_del_price')->where('state_id', $state_id)
								   ->where('area_id', $area_id)
								   ->pluck('price'); 

		//store price for delivery in the session variable 
		if(!Session::has('delivery_price')){
			Session::put('delivery_price', $price[0]);
		}

		//for now return to Idimma's restaurant 
		return redirect()->route('menu.show',[ 'name'=> 'Plated Memoirs' ]);
    	return view('restaurantViews.restaurantsPage')->with('restaurants', $restaurants);
    }
}
