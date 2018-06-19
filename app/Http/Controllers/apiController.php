<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants; 
use DB;

class apiController extends Controller
{
    public function fetchRestaurants()
    {
    	$restaurants = DB::select("SELECT restaurant_name, restaurant_id, restaurant_opening_times from restaurants"); 
        echo json_encode($restaurants);
    }

    public function fetchRestMenu($id)
    {
    	$restaurant = DB::select("SELECT product_description, product_name, product_price from menu where restaurant_id =". $id);
    	echo json_encode($restaurant); 
    }
}


?>
