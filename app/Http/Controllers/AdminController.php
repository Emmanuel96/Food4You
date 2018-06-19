<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\Cart; 
use DB; 
use App\order; 
use App\Restaurants; 
use Illuminate\Notifications\Notification;
use Session; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderConfirmed; 
use App\Notifications\orderReadyForPickUp; 


class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('admin');
    }


	public function addProductPage()
	{
		return view('AdminViews.addProduct');
	}

	public function createProduct(Request $request)
	{

		//firstly we get the user
		$user = Auth::user(); 

		//FIRSTLY, WE CREATE THE PRODUCT AND STORE IT IN THE MENU TABLE 
		$menu = menu::create([
			'product_name'=> $request->product_name, 
			'product_description' => $request->product_description, 
			'product_price' => $request->product_price,
			'product_image'=> $request->product_image->getClientOriginalName(),
			'restaurant_id' => $user->id
			]);

		//STORING THE IMAGE 
		$imageName = $request->product_image->getClientOriginalName();
		$file = $request->file('product_image')->storeAs('images',$imageName);

		// //get the user id and the product id
		// $user_id = $user->id; 
		// $product_id = $menu->product_id; 

		// //NEXT STEP IS TO CREATE THE RESTAURANT PRODUCT TABLE ROW 
		// $restaurant_product = DB::insert("insert into restaurants_products (restaurant_id, product_id) values (?, ?)", [$user_id,$product_id]);


		return view('AdminViews.addProduct');
	}	

	public function viewProducts()
	{
		//variable to store my restaurants product details 
		$restaurant_product = null; 
		//we need to get the products for that particular restaurant or everything for the admin 
		$user = Auth::user(); 

		//if it's an admin user
		if($user->user_role == 1)
		{
			$products = menu::paginate(7); 
		}
		else 
		{
			//else select the products only for that particular user
			// $products = DB::select('select * from restaurants_products, menu where restaurants_products.restaurant_id = :id && menu.item_id = restaurants_products.product_id', ['id' => $user->id] );

			$restaurants = Restaurants::where('restaurant_id', '=', $user->id)->first();
			$products = $restaurants->menu()->paginate(10); 
		}

		return view('AdminViews.viewProducts')->with('products',$products); 
	}


	public function viewOrders()
	{
		$user = Auth::user(); 

		//if admin he should be able to view all the orders 
		if($user->user_role == 1)
		{
			//all i need to implement right now is a way to view all the orders made for you
			//$orders = DB::select('select * from order_products, orders, user where order_products.order_id = orders.order_id'); 

			$orders = DB::select('select * from orders');
		}
		else
		{
			// $restaurants = Restaurants::where('restaurant_id', '=', $user->id)->first(); 
			// return $restaurants->orders; 

			//get all the orders for this restaurant from the DB
			// $orders = DB::select('select user_address from user, order_products where order_products.restaurant_id = :restaurant_id', ['restaurant_id' => ])
			// return $orders; 
			// $orders = DB::select('select DISTINCT order_products.order_id, user.user_name,user.user_address,user.user_phone_number, buyer_id, delivery_status, order_slug,orders.created_at from user,order_products, orders where orders.order_id = order_products.order_id && order_products.restaurant_id = :user_id && user.id = buyer_id', ['user_id' => $user->id]);
		}
		//return $orders; 

		//return $orders; 	
		return view('AdminViews.viewOrders')->with('orders', $orders);
	}

	public function viewOrderProducts($slug, Request $request)
	{
		//function gets the particular order 
		$order = order::where('order_slug', '=', $slug)->first(); 
		//gets all of products for the order from the order restaurant DB
		$orderProducts = DB::select('select * from order_products, orders, menu 
									where orders.order_id = order_products.order_id 
									&& order_products.order_id = :id
									&& menu.product_id = order_products.product_id',['id' => $order->order_id]);
		
		$buyerName = $orderProducts[0]->buyer_name;

		//send orders to view 
		return view('AdminViews.viewOrderProducts', ['orderProducts'=> $orderProducts, 'buyerName' => $buyerName, 'delivery_status'=> $order->delivery_status, 'orderId' => $order->order_id]);
	}

	public function InOutOfStock(Request $request)
	{
		$id = $request->id; 
		$product = menu::where('product_id' ,'=',$id)->first();
		$inStockValue = $product->inStock; 

		if($inStockValue == 0 )
		{
			$inStockValue = 1; 
		}
		else
		{
			$inStockValue = 0; 
		}

		$product->inStock = $inStockValue;
		//save product 
		$product->save(); 

		//add the in stock value to the array 
		$output_array = array(
			'inStockValue' => $inStockValue
			);

		//encode value and return back to ajax 
		$output = json_encode($output_array);
		return $output; 
	}

	//FUNCTION NOTIFIES CUSTOMERS OF THEIR ORDER BEING READY OR BEING PREPARED 
	public function notifyCustomers(Request $request)
	{
		//get the order ID
		$orderID = $request->id; 
		$order = order::where('order_id','=', $orderID)->first();
		 
		//change the status of the order to ready 
		$order->delivery_status = 1; 

		//save changes to the order DB
		$order->save(); 

		//send a message to the user of his order being ready 
		$order->notify(new orderReadyForPickUp());
		
		$output = json_encode('complete');
		return $output;
	}
}

