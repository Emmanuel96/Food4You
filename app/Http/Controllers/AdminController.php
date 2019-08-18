<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\Cart;
use DB;
use URL;
use App\order;
use App\User;
use App\Restaurants;
use App\Category;
use Session;
use App\Batch;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderConfirmed;
use App\Notifications\orderReadyForPickUp;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
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
		// //FIRSTLY WE GET THE LOGGED IN USER
		// $user = Auth::user();
		$messages = [
            'product.name.unique' => 'Product name already exists',
		];
		//VALIDATE THE REQUEST INPUT
		$request->validate([
			'product_name' => 'required|unique:menu',
			'product_description' => 'required',
			'product_price' => 'required|int',
			'product_image' => 'required',
	   ]);

	   	//GET THE CURRENT RESTAURANT
		if(session::has('logged_in_restaurant'))
		{
			$logged_in_restaurant = session::get('logged_in_restaurant');
		}
		else{
			//IF NO CURRENT LOGGED IN RESTAURANT REDIRECT BACK
			return redirect::route('home');
		}

		// return $logged_in_restaurant;

		if($request->new_category != null)
		{

			$new_category = $request->new_category;

			//then add the category to the category database
			$create_category = Category::create([
					'category_name' => $new_category,
					'restaurant_id' => $logged_in_restaurant->restaurant_id
			]);

			$category = $create_category->category_id;
		}
		else {
			$category = $request->category;
        }



		//REMOVE ALL SPACE FROM THE PROUDCT NAME TO FORM THE IMAGE NAME
		$image_name = str_replace(' ', '', $request->input('product_name')).'.'.$request->product_image->getClientOriginalExtension();

        //create a tmp image
        $img = imagecreatefromjpeg($request->file('product_image'));

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

        $tmp_file = substr(str_shuffle($permitted_chars), 0, 10);

        header('Content-Type: image/jpeg');
        //reduce size of tmp image and save
        $img_save = imagejpeg($img,$tmp_file. '.jpeg', 5);

		// //STORING THE IMAGE ON THE SERVER
		// $file = $request->file('product_image')->storeAs('',$image_name);

		$image = Storage::disk('spaces')->putFile(str_replace(' ', '',$logged_in_restaurant->restaurant_name). '/menu',new File($tmp_file.'.jpeg'), 'public');

		//CREATE THE NEW PRODUCT WITHT THE PASSED INPUTS
		$menu = menu::create([
			'product_name'=> $request->input('product_name'),
			'product_description' => $request->input('product_description'),
			'product_price' => $request->product_price,
			'category_id' => $category,
			'product_image'=> $image,
			'restaurant_id' => $logged_in_restaurant->restaurant_id

		]);

		return redirect()->route('admin.addProduct', ['menu' => $menu ])
			->with('success', $request->input('product_name').  ' Added Successfully');
	}

	// send get request to the CDN servers
	public function storeProfileImage($profile_image){

	}

	// get request to ge the image from the CDN servers
	public function getProfileImage($profile_image){

	}

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
			$products = menu::get();
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
			if(session()->has('logged_in_restaurant')){
				$restaurant = session()->get('logged_in_restaurant');
				$restaurant_id = $restaurant->restaurant_id;
			}else{
				redirect()->route('home');
			}
			 $orders = order::where('order_status', '!=', -1)
						 ->where('restaurant_id', '=', $restaurant_id)->get();
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
		$order->delivery_status = $request->order_delivery_status;

		//save changes to the order DB
		$order->save();

		//send a message to the user of his order being ready
		// $order->notify(new orderReadyForPickUp());

		$output = json_encode('complete');
		return $output;
	}

	public function editProduct($id)

	{
		$product = menu::where('product_id', $id)->find($id);
		$restaurant	 = Session::get('logged_in_restaurant');
		return view ('AdminViews/editProduct', [ 'product' => $product, 'restaurant' => $restaurant ]);
	}

	public function showProduct($id)
	{
		$product = menu::where('product_id', $id)->find($id);
		$restaurant = Session::get('logged_in_restaurant');

		return view ('AdminViews/showProduct', [ 'product' => $product, 'restaurant' => $restaurant ]);

	}

	public function updateProduct(Request $Request, $id)
	{
		$menu = menu::where('product_id', $id)->find($id);

		//VALIDATE THE REQEUST FROM THE FORM
		$Request->validate([
			'product_name' => 'required',
			'product_price' => 'required',
			'category' => 'required',
			// 'product_image' => 'required',
			'product_description' => 'required|max:255',
		]);

		if(session()->has('logged_in_restaurant'))
		{
			$logged_in_restaurant = session()->get('logged_in_restaurant');
		}
		else{
			return redirect()->route('home');
		}

		//IF USER CHANGED THE IMAGE
		if($Request->product_cur_image == "changed"){
			//firstly delete the current image
			// $image = Storage::disk('spaces')->delete($logged_in_restaurant->restaurant_name. '/menu',$menu->product_image, 'public');

			//CONTANTONATE THE PRODUCT NAME WITH THE CLIENT EXTENSION
			$image_name = str_replace(' ', '', $Request->input('product_name')).'.'.$Request->file('product_image')->getClientOriginalExtension();
			//create a tmp image
			$img = imagecreatefromjpeg($Request->file('product_image'));

            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

            $tmp_file = substr(str_shuffle($permitted_chars), 0, 10);

			header('Content-Type: image/jpeg');
            //reduce size of tmp image and save
            $img_save = imagejpeg($img,$tmp_file. '.jpeg', 5);

			$image = Storage::disk('spaces')->putFile(str_replace(' ', '',$logged_in_restaurant->restaurant_name). '/menu', new File($tmp_file.'.jpeg'), 'public');

			//STORE THE NEW MENU IMAGE
			$menu->product_image = $image;

			//a bit dirty but it's my fastest route for now, please clean it later Emmanuel: 05/08/2019
			unlink($tmp_file. '.jpeg');
            // imagedestroy($img_final);

            //At the end of everything na to store the images
            $menu->product_image = $image;
		}


		//CHANGE THE MENU DETAILS TO THE NEW VALUES PASASED
		$menu->product_name = $Request->product_name;
		$menu->product_price = $Request->product_price;
		$menu->category_id = $Request->category;
		$menu->product_description = $Request->product_description;


		//SAVE THE UPDATED VALUES
		$menu->save();

		//PASS SUCCESSFUL MESSAGE TO THE VIEW PRODUCTS PAGE
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
			// 'restaurant_name' => 'required|unique:Restaurants',
			'restaurant_opening_times' => 'required',
			'restaurant_closing_times' => 'required',
			'restaurant_address' => 'required|max:255',
			'restaurant_phone_number' => 'int|min:11',
			'restaurant_image' => 'required',
			'restaurant_minimum_order' => 'required|int',
		]);

		//REMOVE ALL SPACE FROM THE PROUDCT NAME TO FORM THE IMAGE NAME
		$image_name = str_replace(' ', '', $request->restaurant_name).'.'.$request->restaurant_image->getClientOriginalExtension();
		$restaurant_name = str_replace(' ', '', $request->restaurant_name);

		$image = Storage::disk('spaces')->putFile($restaurant_name. '/profile',$request->file('restaurant_image'), 'public');

		Restaurants::create(
			[
				'restaurant_id' => $restaurant_id,
				'restaurant_name'=> $request->restaurant_name,
				'restaurant_opening_times'=> $request->restaurant_opening_times,
				'restaurant_closing_times'=> $request->restaurant_closing_times,
				'restaurant_address' => $request->restaurant_address,
				'restaurant_phone_number' => $request->restaurant_phone_no,
				'restaurant_image' => $image,
				'restaurant_minimum_order' => $request->restaurant_minimum_order
			]
			);

			//create user for the restaurant
			User::create([
				'user_name' => $request->restaurant_name,
				'email' => str_replace(' ', '', $request->restaurant_name). '@gmail.com',
				'password' => app('hash')->make('admin'),
				'user_role' => 3,
				'user_address' => $request->restaurant_address,
				'user_phone_number' => $request->restaurant_phone_no
			]);

		Session::flash($request->restaurant_name.' Restaurant succesfully added');
		return redirect('/admin/restaurants');
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


		$request->validate([
			'restaurant_name' => 'required',
			'restaurant_opening_times' => 'required',//|date_format:H:i',
			'restaurant_closing_times' => 'required',//date_format:H:i',
			'restaurant_address' => 'required|max:255',
			'restaurant_phone_number' => 'required|string',
			// 'restaurant_image' => 'required',
			// 'restaurant_header_image' => 'required',
			'restaurant_minimum_order' => 'required|int',
		]);

		$restaurant = Restaurants::where('restaurant_id', $id)->first();

		$image = $request->file('restaurant_image');
		// return $request->current_image;

		//if restaurant profile image changed
		if(env('DGS_TEST_IMAGE_PATH').$restaurant->restaurant_image != $request->current_image){
			if($request->file('restaurant_image') != null){
				$imageName = $request->file('restaurant_image')->getClientOriginalName();

				$restaurant_name = str_replace(' ','',$request->restaurant_name);
				$image = Storage::disk('spaces')->putFile($restaurant_name. '/profile',$request->file('restaurant_image'), 'public');
			}else{
				$image = $restaurant->restaurant_image;
			}
		}

		//if restaurant header image changed
		if($restaurant->header_image != $request->restaurant_header_image){
			if($request->file('restaurant_header_image') != null){
				$imageName = $request->restaurant_header_image->getClientOriginalName();
				$header_image = Storage::disk('spaces')->putFile(str_replace(' ','',$request->restaurant_name). '/header', $request->file('restaurant_header_image'), 'public');
			}else{
				$header_image = $restaurant->header_image;
			}
		}

		DB::table('restaurants')->where('restaurant_id', $id)->update([
			'restaurant_name'=> $request->restaurant_name,
			'restaurant_opening_times'=> $request->restaurant_opening_times,
			'restaurant_closing_times'=> $request->restaurant_closing_times,
			'restaurant_address' => $request->restaurant_address,
			'restaurant_phone_number' => $request->restaurant_phone_number,
			'restaurant_image' => $image,
			'header_image' => $header_image,
			'restaurant_minimum_order' => $request->restaurant_minimum_order
		]);

		Session::flash('RestaurantUpdated', 'Restaurant ['.$request->restaurant_name.'] Updated Successfully');
		return redirect('admin/restaurants');
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

			return view('AdminViews.editRestaurantProfile', compact('restaurant', 'restaurants'));


			}
			else {

				return 'what you doing here ?';
			}


	}

	public function updateRestaurantProfile(Request $request, $id)
	{
		$restaurant = Restaurants::where('restaurant_id', $id)->first();

		$request->validate([
			'restaurant_name' => 'required|unique:Restaurants',
			'restaurant_opening_times' => 'required|date_format:H:i',
			'restaurant_closing_times' => 'date_format:H:i',
			'restaurant_address' => 'required|max:255',
			'restaurant_phone_number' => 'int|min:11',
			'restaurant_image' => 'required',
			'restaurant_minimum_order' => 'required|int',
		]);




		$restaurant->save();

		Session::flash('RestaurantUpdated', 'Restaurant ['.$request->restaurant_name.'] Updated Successfully');

		$imageName = $request->restaurant_image->getClientOriginalName();


		$file = $request->file('restaurant_image')->storeAs('images/'.$request->restaurant_name,$imageName);
		// Storage::disk('public')->put($imageName, 'Contents');
		$image = Storage::disk('spaces')->putFile($request->restaurant_name. '/profile',$request->file('product_image'), 'public');

		// dd($request->all());

		DB::table('restaurants')->where('restaurant_id', $id)->update([
			'restaurant_name'=> $request->restaurant_name,
			'restaurant_opening_times'=> $request->restaurant_opening_times,
			'restaurant_closing_times'=> $request->restaurant_closing_times,
			'restaurant_address' => $request->restaurant_address,
			'restaurant_phone_number' => $request->restaurant_phone_number,
			'restaurant_image' => $image,
			'restaurant_minimum_order' => $request->restaurant_minimum_order
		]);
		return 'updated successfully';

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

	public function viewProduct_test(Request $request){
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
			$restaurant = DB::select("select restaurant_id from restaurants where user_id = :user_id", ['user_id'=> $user->id]);
			$restaurant_id = $restaurant[0]->restaurant_id;

			$products = Menu::where('restaurant_id', '=', $restaurant_id)->get()->sortBy('category_id');
			$products->toArray();
		}

		$restaurant = restaurants::find($restaurant_id);
		//get all the categories for the current restaurants
		$categories = $restaurant->categories()->get();

		$category2 =  $products->groupBy('category_id');
        $category2->toArray();

		$orders = order::where('order_status', '=','1')->get();
		//get the number of orders with a status of 1
		$order_count = order::where('order_status', '=', '1')->count();

		return view('AdminViews.viewProduct_test', ['products'=> $products, 'category2' => $category2, 'categories' => $categories]);
	}

	public function category()
	{
		if(session()->has('logged_in_restaurant')){
			$restaurant= session()->get('logged_in_restaurant');
			$categories = Category::where('restaurant_id', '=', $restaurant->restaurant_id)->get();
		}else{
			return redirect('/home');
		}

		return view('AdminViews.category', ['categories' => $categories]);
	}

	public function newCategory()
	{
		return view('AdminViews.newCategory');
	}

	public function storeCategory(Request $request)
	{
		if(session()->has('logged_in_restaurant')){
			Category::create([
				'category_name' => $request->category_name,
				'restaurant_id'=> session()->get('logged_in_restaurant')->restaurant_id
			]);
		}else{
			return redirect('/home');
		}

		return redirect('/admin/restaurant/category')->with('success', 'category created successfully!');

	}

	public function showCategory($id, Request $request)
	{
		$category = Category::where('category_id', $id)->first();

		return view('AdminViews.showCategory', ['category' => $category ]);
	}

	public function editCategory($id, Request $request)
	{
		$category = Category::where('category_id', $id)->first();

		return view('AdminViews.editCategory', ['category' => $category ]);
	}

	public function updateCategory($id, Request $request)
	{
		$category = Category::where('category_id', $id)->first();

		DB::table('categories')
		->where('category_id', $id)
		->update([
			'category_name' => $request->category_name
		]);

		return 'category updated successfully!';
	}

	public function deleteCategory($id)
	{
		$category = Category::where('category_id', $id)->first();

		$category->delete();

		return redirect()->route('admin.category');
	}

	public function calculateRevenue($revenues){

		$total = 0;
		foreach($revenues as $revenue){
			$total += $revenue->order_price;
		}

		return $total;
	}

	public function viewDashboard(){

		if(session()->has('logged_in_restaurant')){
			$restaurant = session()->get('logged_in_restaurant');
		}
		$total_orders_count = order::where('order_status', '=','1')->where('restaurant_id', '=', $restaurant->restaurant_id)->count();
		$total_orders_count_today = order::where('order_status','=', '1')->where('restaurant_id', '=', $restaurant->restaurant_id)->where('created_at', '>=', time() - (24*60*60))->count();
		$total_revenue = $this->calculateRevenue(order::where('order_status','=', '1')->where('restaurant_id', '=', $restaurant->restaurant_id)->get());
		$total_revenue_today = $this->calculateRevenue(order::where('order_status','=', '1')->where('restaurant_id', '=', $restaurant->restaurant_id) ->where('created_at', '>=', time() - (24*60*60))->get());

		return view('AdminViews.dashboard')
			->with([
				'total_orders'=>$total_orders_count,
				'total_orders_today' => $total_orders_count_today,
				'total_revenue' => $total_revenue,
				'total_revenue_today' => $total_revenue_today
				]);
	}
}
