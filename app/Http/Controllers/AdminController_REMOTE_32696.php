<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\Cart; 
use DB; 
use App\order; 
use App\Restaurants; 
use App\category;
use Session;
use App\Batch;
use Illuminate\Notifications\Notification; 
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
		
		$request->validate([
			'product_name' => 'required|unique:menu',
			'product_description' => 'required',
			'product_price' => 'required|int',
			'product_image' => 'required',
	   ]);
		
		if($request->new_category != null)
		{
		   
			$new_category = $request->new_category; 

			//then add the category to the category database
			$create_category = category::create([
					'category_name' => $new_category, 
					'restaurant_id' => 1
				]);
			//category to store on the products page will be an id 
		    $category = $create_category->category_name; 
		}
		else {
		// {
		// 	$request->validate([
		// 		'product_name' => 'required|unique:menu',
		// 		'product_description' => 'required',
		// 		'product_price' => 'required',
		// 		'category' => 'required',
		// 		'product_image' => 'required',
		//    ]);
		   
			$category = $request->category; 

			$menu = menu::create([
				'product_name'=> $request->input('product_name'), 
				'product_description' => $request->input('product_description'), 
				'product_price' => $request->product_price,
				'category' => $category,
				'product_image'=> $request->product_image->getClientOriginalName(),
				'restaurant_id' => $user->id
	
				]);
		}		
		//FIRSTLY, WE CREATE THE PRODUCT AND STORE IT IN THE MENU TABLE 

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
		
		

		return redirect()->route('admin.addProduct', ['menu' => $menu ])
			->with('success', $request->input('product_name').  ' Added Successfully');
																																																
		}	


		// //get the user id and the product id
		// $user_id = $user->id; 
		// $product_id = $menu->product_id; 

		// //NEXT STEP IS TO CREATE THE RESTAURANT PRODUCT TABLE ROW 
		// $restaurant_product = DB::insert("insert into restaurants_products (restaurant_id, product_id) values (?, ?)", [$user_id,$product_id]);


	

	public function viewProducts(Request $request)
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

		$orders = order::where('order_status', '=','1')->get(); 
		//get the number of orders with a status of 1
		$order_count = order::where('order_status', '=', '1')->count(); 

		return view('AdminViews.viewProducts', ['products'=> $products]); 
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
		$product = menu::where('product_id', $id)->find($id);
		
		return view ('AdminViews/editProduct', compact('product'));
	}

	public function showProduct($id) 
	{
		$product = menu::where('product_id', $id)->find($id);

		return view ('AdminViews/showProduct', compact('product'));

	}

	public function updateProduct(Request $Request, $id)
	{
		$menu = menu::where('product_id', $id)->find($id);
		
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

		$file = $Request->input('product_image');
		dd($file);
		
		$new_name = rand() . '.' . $file;
		dd($new_name);

		
		// $imageName = $Request->file('image')->getClientOriginalName();

		// $file = $Request->file('product_image')->storeAs('images',$imageName);
	
		// Storage::disk('public')->put($imageName, 'Contents');

		return $menu;
		Session::flash('ProductUpdated', 'Product ['.$Request->product_name.'] Updated Successfully');
		
		return redirect('admin/viewProducts')->with('success', 'menu updated successfully!');
	}

	public function destroy($id)
	{
		$product = menu::find($id);
		$product->delete();

		return redirect()->route('admin.viewProducts');
	}

	public function testViewOrder(Request $request, Response $response)
	{
		$user = Auth::user(); 

		$orders = DB::select('select * from orders where order_status != -1');

		//return $orders; 	
		return view('AdminViews.testViewOrders')->with('orders', $orders);
	}

	//Restaurant functionalities	
	public function restaurants()
	{
		$restaurants = DB::select('select * from restaurants'); 
		//$restaurants = Restaurants::where('restaurant_id', '$id')->get();

		//return $restaurants;

		return view('AdminViews.view_restaurants')->with('restaurants', $restaurants); 
	}

	public function newRestaurant()
	{
		return view('AdminViews.new_restaurant'); 
	}

	public function new_restaurant(Request $request, Response $response)
	{
		$restaurant_id = rand(50,1000); 

		$request->validate([
			//'restaurant_id' => 'required|unique:Restaurants',
			'restaurant_name' => 'required|unique:Restaurants',
			'restaurant_opening_times' => 'required|date_format:H:i',
			'restaurant_closing_times' => 'date_format:H:i',
			'restaurant_address' => 'required|max:255',
			'restaurant_phone_number' => 'int|min:11',
			'restaurant_image' => 'required',
			'restaurant_minimum_order' => 'required|int',
		]);

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

	public function showRestaurant($id) {
		$restaurant = Restaurants::where('restaurant_id', $id)->find($id);
		//dd($restaurant);

		return view ('AdminViews/showRestaurant', compact('restaurant'));
	}

	public function editRestaurant($id) {

		$restaurant = Restaurants::where('restaurant_id', '=', $id)->first();
		
		return view ('AdminViews/editRestaurant', compact('restaurant'));
	}

	public function updateRestaurant(Request $request, $id) {

		$restaurant = Restaurants::where('restaurant_id', $id)->first();

		$request->validate([
			//'restaurant_id' => 'required|unique:Restaurants',
			'restaurant_name' => 'required|unique:Restaurants',
			'restaurant_opening_times' => 'required|date_format:H:i',
			'restaurant_closing_times' => 'date_format:H:i',
			'restaurant_address' => 'required|max:255',
			'restaurant_phone_number' => 'int|min:11',
			'restaurant_image' => 'required',
			'restaurant_minimum_order' => 'required|int',
		]);

		DB::table('restaurants')->where('restaurant_id', $id)->update([
				'restaurant_id' => $restaurant_id, 
				'restaurant_name'=> $request->restaurant_name, 
				'restaurant_opening_times'=> $request->restaurant_opening_times, 
				'restaurant_closing_times'=> $request->restaurant_closing_times, 
				'restaurant_address' => $request->restaurant_address, 
				'restaurant_phone_number' => $request->restaurant_phone_no, 
				'restaurant_image' => $request->restaurant_image,
				'restaurant_minimum_order' => $request->restaurant_minimum_order
		]);

		return $restaurant;

		$restaurant->save();

		Session::flash('RestaurantUpdated', 'Restaurant ['.$Request->restaurant_name.'] Updated Successfully');
		
		$imageName = $Request->restaurant_image->getClientOriginalName();

		$file = $Request->file('restaurant_image')->storeAs('images',$imageName);
		// Storage::disk('public')->put($imageName, 'Contents');


		return 'updated successfully';
	}

	public function deleteRestaurant($id) {
		$restaurant = Restaurants::find($id);
		$restaurant->delete();

		return redirect()->route('admin.restuarants');
	}

	
	public function view_restaurant_batch()
	{
		$batches = DB::select('select * from batch'); 

		return view('adminViews.view_restaurant_batch')
		->with('batches' , $batches);
	}

	public function new_restaurant_batch(Request $request, Response $response)
	{
		return view('adminViews.new_restaurant_batch'); 
	}

	public function post_new_restaurant_batch(Request $request, Response $response)
	{
		$request->validate([
			'batch_day' => 'required',
			'batch_max_order_no' => 'required|int', 
			'batch_range' => 'required|string' 
		]); 

		$batch_slug = md5(uniqid(rand(), true)); 

		Batch::create([
			'batch_slug' =>  $batch_slug, // something random 
			'batch_day' => $request->batch_day, 
			'batch_max_order_no' => $request->batch_max_order_no, 
			'batch_time_range' => $request->batch_range
		]); 

		
		return view('adminViews.new_restaurant_batch');
	}

	public function showBatch($id) {
	
		//$batch = Batch::all()->find($id);
		$batch = Batch::where('batch_id', '=', $id)->first();
		//dd($batch);
		
		return view('AdminViews/showBatch', compact('batch'));
	}

	public function editBatch($id) {
		$batch = Batch::where('batch_id', '=', $id)->first();

		return view('AdminViews/editBatch', compact('batch'));
	}

	public function updateBatch(Request $request, $id) {

		$batch = Batch::where('batch_id', $id)->first();
		DB::table('batch')
		->where('batch_id', $id)
		->update([
			'batch_day' => $request->batch_day,
			'batch_time_range' => $request->batch_time_range,
			'batch_max_order_no' => $request->batch_max_order_no,
			'batch_order_no' => $request->batch_order_no
		]);

		$batch->save();	
		//return $batch;	
		return 'updated successfully!';
	}

	public function deleteBatch($id) {

		$batch = Batch::first();

		if($batch != null) {
			//$batch = Batch::where('batch_id', $id)->find($id);
			DB::table('batch')->delete();
			//$batch->delete();

			return redirect()->route('admin.restaurant_batch');
		}

		return redirect()->route('admin.restaurant_batch');
	}

	public function adminator()
	{
		return view('adminViews.adminator');
	}

	public function editRestaurantPassword($id, Request $request)
	{
		$restaurant = Restaurants::where('restaurant_id', $id)->first();

		return view('adminViews.editRestaurantPassword', compact('restaurant'));
	}
	public function changeRestaurantPassword($id)
	{

		$user = User::where('id', $user->user_id)->update([
			'password' => $request->restaurant_password
			
		]);

		return 'password changed!';
	}

	public function editRestaurantProfile($id)
	{
			$user_role = Auth::user()->user_role;

			if($user_role === 3){
	
			$restaurant = Restaurants::where('restaurant_id','=', $id )->first();
			
			$restaurants = Restaurants::all();
			//return $restaurants;

			return view('adminViews.editRestaurantProfile', compact('restaurant', 'restaurants'));	


			} 
			else {

				return 'what you doing here ?';
			}


	}

	public function updateRestaurantProfile(Request $request, $id) 
	{
		$restaurant = Restaurants::where('restaurant_id', $id)->first();

		DB::table('restaurants')->where('restaurant_id', $id)->update([
			'restaurant_name' => $request->restaurant_name,
			'restaurant_address' => $request->restaurant_address,
			'restaurant_phone_number' => $request->restaurant_phone_number,
			'restaurant_opening_times' => $request->restaurant_opening_times,
			'restaurant_closing_times' => $request->restaurant_closing_times,
			'restaurant_minimum_order' => $request->restaurant_minimum_order
		]);

		$restaurant->save();

		return 'updated successfully!';
	}

	public function openRestaurant()
	{
		//firstly confirm if the session has the current logged in restaurant and if it does then close it 
		if(session()->has('logged_in_restaurant'))
		{
			$restaurant = Restaurants::where('restaurant_id', '=',session::get('logged_in_restaurant')->restaurant_id)->first(); 
			
			$restaurant->restaurant_status = 1; 
			$restaurant->save(); 
			return; 
		}
	}

	public function closeRestaurant()
	{
		//firstly confirm if the session has the current logged in restaurant and if it does then close it 
		if(session()->has('logged_in_restaurant'))
		{ 
			$restaurant = Restaurants::where('restaurant_id', '=',session::get('logged_in_restaurant')->restaurant_id)->first(); 
			
			$restaurant->restaurant_status = 0; 
			$restaurant->save(); 
			return; 
		}
	}
}
