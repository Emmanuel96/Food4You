<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\Cart; 
use DB; 
use App\order; 
use App\Restaurants; 
use App\category;
use Illuminate\Notifications\Notification;
use Session; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderConfirmed; 
use App\Notifications\orderReadyForPickUp; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;	


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

		$messages = [
            
            'product.name.unique' => 'Product name already exists', 
        ];
		
		if($request->new_category != null)
		{
			$request->validate([
				'product_name' => 'required|unique:menu',
				'product_description' => 'required',
				'product_price' => 'required',
				'category' => 'required',
				'new_category' => 'required',
				'product_image' => 'required',
		   ]);
		   
			$category = $request->new_category; 

			//then add the category to the category database
			$category = category::create(
				[
					'category_name' => $category, 
					'restaurant_id' => 1
				]
				);
		}
		else
		{
			$request->validate([
				'product_name' => 'required|unique:menu',
				'product_description' => 'required',
				'product_price' => 'required',
				'category' => 'required',
				'product_image' => 'required',
		   ]);
		   
			$category = $request->category; 
		}
		
		//FIRSTLY, WE CREATE THE PRODUCT AND STORE IT IN THE MENU TABLE 

		$menu = menu::create([
			'product_name'=> $request->input('product_name'), 
			'product_description' => $request->input('product_description'), 
			'product_price' => $request->product_price,
			'category' => $category,
			'product_image'=> $request->product_image->getClientOriginalName(),
			'restaurant_id' => $user->id

			]);

		//if product name already exist
		// $menu = menu::where('product_name', $menu->product_name)->first();

		// if($menu)
		// {
		// 	return 'IGH';
		// 	return redirect()->route('admin.addProduct', ['product_name' => $menu->product_name])
		// 	->with('success', $request->input('product_name'). ' added successfully');
		// }

		//STORING THE IMAGE 

		$imageName = $request->product_image->getClientOriginalName();
		$file = $request->file('product_image')->storeAs('images',$imageName);
		// Storage::disk('public')->put($imageName, 'Contents');
		
		

		return redirect()->route('admin.addProduct', ['product_name' => $menu->product_name])
			->with('success', $request->input('product_name').  ' Added Successfully');
																																																
		}	


		// //get the user id and the product id
		// $user_id = $user->id; 
		// $product_id = $menu->product_id; 

		// //NEXT STEP IS TO CREATE THE RESTAURANT PRODUCT TABLE ROW 
		// $restaurant_product = DB::insert("insert into restaurants_products (restaurant_id, product_id) values (?, ?)", [$user_id,$product_id]);


	

	public function viewProducts()
	{
		//variable to store my restaurants product details 
		$restaurant_product = null; 
		//we need to get the products for that particular restaurant or everything for the admin 
		$user = Auth::user(); 

		//next time we should find the matching restaurant

		//if it's an admin user
		if($user->user_role == 1)
		{
			$products = menu::all(); 
		}
		else 
		{
			//else select the products only for that particular user
			// $products = DB::select('select * from restaurants_products, menu where restaurants_products.restaurant_id = :id && menu.item_id = restaurants_products.product_id', ['id' => $user->id] );
			//else get the id of the restaurant 
			$restaurant_id = DB::select("select restaurant_id from restaurants where user_id = :user_id", ['user_id'=> $user->id]);
			$restaurant_id = $restaurant_id[0]->restaurant_id;

			$products = Menu::where('restaurant_id', '=', $restaurant_id)->get();
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

			$orders = DB::select('select * from orders where order_status != -1');
		}
		else
		{
			 $restaurants = Restaurants::where('restaurant_id', '=', 0)->first(); 
			 $orders = DB::select('select * from orders where order_status != -1 AND restaurant_id = 0');
		}

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
		 
		//change the status of the order to re==ady 
		$order->order_status = $request->order_status; 

		//save changes to the order DB
		$order->save(); 

		//send a message to the user of his order being ready 
		$order->notify(new orderReadyForPickUp());
		
		$output = json_encode('complete');
		return $output;
	}

	public function editProduct($id)

	{
		$product = menu::find($id);
		//$product->product_description; 

		return view ('AdminViews/editProduct', compact('product'));
	}

	public function updateProduct(Request $Request, $id)
	{
		$menu = new menu;

		$Request->validate([
			'product_name' => 'required',
			'product_price' => 'required',
			'category' => 'required',
			'product_image' => 'required',
			'product_description' => 'required|max:255',
		]);

		DB::table('menu')
		->where('product_id', $id)	
		->update(['product_name' => $Request->product_name , 
				'product_price' => $Request->product_price , 
				'category' => $Request->category, 
				'product_image' => $Request->product_image ,
				'product_description' => $Request->product_description
				]);

		Session::flash('ProductUpdated', 'Product ['.$Request->product_name.'] Updated Successfully');
		
		$imageName = $Request->product_image->getClientOriginalName();

		$file = $Request->file('product_image')->storeAs('images',$imageName);
		// Storage::disk('public')->put($imageName, 'Contents');

		return redirect('admin/viewProducts')->with('success', 'menu updated successfully!');
	}

	public function testViewOrder(Request $request, Response $response)
	{
		$user = Auth::user(); 

		$orders = DB::select('select * from orders where order_status != -1');

		//return $orders; 	
		return view('AdminViews.testViewOrders')->with('orders', $orders);
	}

	public function restaurants()
	{
		$restaurants = DB::select('select * from restaurants'); 

		return view('AdminViews.view_restaurants')->with('restaurants', $restaurants); 
	}

	public function newRestaurant()
	{
		return view('AdminViews.new_restaurant'); 
	}

	public function new_restaurant(Request $request, Response $response)
	{
		$restaurant_id = rand(50,1000); 
		Restaurants::create(
			[
				'restaurant_id' => $restaurant_id, 
				'restaurant_name'=> $request->restaurant_name, 
				'restaurant_opening_times'=> $request->restaurant_opening_times, 
				'restaurant_closing_times'=> $request->restaurant_closing_times, 
				'restaurant_address' => $request->restaurant_address, 
				'restaurant_phone_number' => $request->restaurant_phone_no, 
				'restaurant_image' => $request->restaurant_image,
				'restaurant_minimum_order' => $request->restaurant_minimum_order
			]
			);

			return "successfully saved";

	}
}
