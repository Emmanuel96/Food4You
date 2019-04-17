<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu; 
use App\Restaurants; 
use DB; 
use Session;
use App\User; 
use App\Cart;
use App\Category; 
use App\Notifications\OrderConfirmed; 
use Illuminate\Notifications\Notification;
use Auth; 

class MenuController extends Controller
{
    Public function displayAll(){

       //firstly we need to get everything from the menu dB
       // we will use our menu model 
       $menu = menu::paginate(20); 

        // $restaurants = Restaurants::where('restaurant_name' , '=', $name)->first();
        $restaurant_status =1;

        // $menu = $restaurants->menu()->paginate(20); 

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        

        return view('menuViews.menu',['menu'=> $menu, 'restaurant_status' => $restaurant_status]);

       // return('this is the Menu view');
        // return view('menuViews.menu')->with('menu',$menu);
    }

    public function getProductDetails(Request $request)
    {
        //firstly we need to get the item from the db with its id 
        $product = menu::where('product_id', '=', $request->id)->first();
        //then i want to pass the attribtues for the product to an array 

        //to get the onclick function 


        $output_array = array(
            'productName' =>$product->product_name, 
            'productDescription' => $product->product_description, 
            'productPrice' => $product->product_price,
            'productImage' => $product->product_image, 
            'onclick' => "addItemToCart('".$request->id."')"
            ); 

        $output = json_encode($output_array);
        return $output;  
    }

    public function displayMenu($name){

        // $user = User::first(); 
        // // return $user;
        
        // $user->notify(new OrderConfirmed()); 

        //display menu for the particular restaurant 
        $restaurants = Restaurants::where('restaurant_name' , '=', $name)->first();
        $restaurant_status = $restaurants->restaurant_status;

        //store the current restaurant in the session 
        Session::put('current_restaurant_id', $restaurants->restaurant_id);

        //get all the categories for the current restaurants 
        $categories = $restaurants->categories()->get(); 

        $menu = $restaurants->menu()->get()->sortBy('category_id'); 
        $menu->toArray(); 
        //----------------- TEST FOR GROUP BY WITH DB BUILDER ----------------------------- 
        $category2 =  $menu->groupBy('category_id'); 
        $category2->toArray(); 

        // echo ' <pre>'; 
        // var_dump($category2); 
        // return; 

            
        // foreach($category2 as $category => $menu)
        // {
        //     echo $category; 
        //     echo '<br>';
        //     foreach($menu as $m){
        //         echo $m->product_name; 
        //     }
        // }
        // echo '<pre>'; 
        // var_dump($category2); 
        // return; 
        //------------------ END OF TEST ------------------------------------------------

        // $menu =  DB::select('select * from restaurants_products, menu, user where user.name = :name && user.role =3 && restaurants_products.restaurant_id = user.id && menu.item_id = restaurants_products.product_id', ['name' => $name] )->paginate(15);

        //check if the cart exists in the session or not 
        // if(!Session::has('cart'))
        // {
        //     return view('cartViews.cart');
        // }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //make restaurant_status = 1; 
        $restaurant_status = 1; 
        
       // return $cart->items;

    //    return $category2[0]; 

        return view('TestViews.menuTestView',
            [
                'menu'=> $menu, 'products' => $cart->items, 
                'totalPrice' => $cart->totalPrice,
                'restaurant_status' => $restaurant_status,
                'restaurant'=> $restaurants,
                'categories' => $categories,
                'category2' => $category2
            ]);
    }
}
