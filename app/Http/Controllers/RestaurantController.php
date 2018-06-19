<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restaurants; 
use Auth; 

class RestaurantController extends Controller
{
    public function restaurantsPage()
    {
    	//return Auth::user(); 
    	//get all the restaurants fromt the DB and return it 
    	$restaurants = Restaurants::paginate(20); 
    	return view('restaurantViews.restaurantsPage')->with('restaurants', $restaurants);
    }
}
