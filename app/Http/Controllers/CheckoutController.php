<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session; 
use App\Cart; 
use App\User; 
use App\Restaurants; 
use App\order; 
use App\daysofdelivery;
use App\Mail\OrderConfirmation;
use DB; 
use App\Notifications\OrderConfirmed; 
use App\Notifications\newOrderReceived; 
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Illuminate\Support\Facades\Mail;
use Paystack; 
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function displayCheckout(){
        Log::info('I got here');
        if(!Session::has('cart'))
        {
            return view('cartViews.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //we need the days for delivery for that particular customer
        //$days_of_delivery = daysofdelivery::all();
        $days_of_delivery = DB::select('select * from days_of_delivery where restaurant_id = 0');

        return view('checkOutViews.checkout',['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'days'=> $days_of_delivery]);//, 'phone_numbers'=> $restaurants->restaurant_phone_number]);
    }

    public function createOrder(Request $request)
    {

        if(!Session::has('cart'))
        {
        	return redirect()->route('cart.show');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //so for now you can only get the orders from one restaurant at a time
        //store the restaurant ID
        $restaurant_id = 0; 

        //get the actual day from the db
        $day =  DB::table('days_of_delivery')->where('id', $request->day)->pluck('days');;
        

        //Create order
        $orders = order::create(                                                                                                
            [
                 //STORE ORDER PRICE
                'buyer_name' => $request->name, 
                //I NEED TO FIND A PROPER WAY TO FIND THE RESTAURANT ID
                'buyer_email' => $request->email, 
                'buyer_phone_number' => $request->phone, 
                'buyer_address' => $request->address, 
                'order_slug' => substr( "abcdefghijklmnopqrstuvwxyz" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'payment_ref' => substr( "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'order_status' => '-1',
                'restaurant_id' => $restaurant_id,
                'batch' => $request->batch, 
                'day'=> $day[0],
                'image' => 'ass.jpg'
                 
            ]);

            $order_slug = $orders->order_slug;
            Session::put('order_slug', $order_slug);


                    //dd($orders);die;

            //once we create the order, we update the amount in the current number of order
            $current_no_of_delivery =  DB::table('days_of_delivery')->where('id', $request->day)->pluck('current_no_of_delivery');;
            $c_no_of_del = $current_no_of_delivery[0] + 1;  

            $update = DB::update('update days_of_delivery set current_no_of_delivery ='. $c_no_of_del.' where id = ?', [''.$request->day.'']);
            //return $update; 
            //return $update; 
            


            //he only way to sovle this issue is by going left and right 
            
        //find the order from the order table 
        $orders = order::where('order_slug','=', $orders->order_slug)->first(); 

        //save order slug on session 
        session(['order_slug'=> $orders->order_slug]);

        //store all the products in the order in the order products table
        //firstly get all the products fromt the cart
        $cart =  Session::has('cart')? Session::get('cart'):null;

        // if a cart exists 
        if($cart)
        {

            $products = $cart->items; 
            if($products)
            {
               //then loop through each of the products and store each in the DB
                foreach($products as $product )
                {
                    //get the product ID
                    $productId = $product['item']['product_id'];
                    //then get the restaurant id for this product    
                    $restaurant_id = DB::table('menu')->where('product_id',$productId)->value('restaurant_id');

                    DB::table('order_products')->insert(
                        ['order_id' => $orders->order_id, 'restaurant_id' => $restaurant_id , 'product_id' => $product['item']['product_id'],'order_extras'=> $product['extra'], 'qty_ordered' =>$product['qty'] ] 
                    );

                }
            }
        } 
        return Paystack::getAuthorizationUrl()->redirectNow();

    }


    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();

        // echo $paymentDetails['status']; 

        // dd($paymentDetails); return;


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want#

        
        // $message = "dlfjdlfjkdf";
        // $data = ["sdkflsjadkfsdlfsdllfjsdflksdkfdslsfjdsfldlfkjdsljfldslfkds"]; 

        ///NOTIFICATIONS FOR ORDER
        //$order_slug = $request->session()->get('order_slug');
        //$order_slug = $request->session()->pull('buyer_email');
        
        // dd($order_slug);

        //send email of confirmation to the user 
        //Mail::to($request->user())->send(new OrderConfirmation()); 

        //send text message to user confirming order 
        //$orders->notify(new OrderConfirmed($orders->payment_ref));

        // echo session::get('order_slug'); 

        //get order with this order slug 
        $orders = order::where('order_slug','=', session::get('order_slug'))->first(); 
        
        //if payment was successful then order status = 1
        if($paymentDetails['status'] ==1)
        {
            $orders->order_status = 1; 
        }
        else{
            $orders->order_status = -1; 
        }

        $orders->save(); 


        //else order status = -1

        //SEND A TEXT MESSAGE TO ME WHEN IT'S READY 
        $user = User::where('email','admin@gmail.com')->first(); 

         if(!Session::has('cart'))
        {
        	return redirect()->route('cart.show');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        
        // $user->notify(new newOrderReceived($orders->buyer_name, $orders->buyer_phone_number)); 

        //send a notification to the restaurants as well 
        //first get the restaruant 
       
       
        // $restaurant = Restaurants::find($restaurant_id); 
       // $restaurant->notify(new OrderConfirmed($orders->payment_ref));

        //just for test purposes but i will also need a text message to myself about 

        //to get the description for an order 
        $descriptionText = ""; 
        foreach($cart->items as $items)
        {
            $descriptionText .= $items['qty']. "x ".$items['item']['product_name']." with ". $items['extra']. "\n"; 
        }

        Session::forget('cart');

        
        return redirect()->route('order/tracking/'.$orders->id);
        return view('OrderTracker.preparing');
    }

    public function orderTracking($id)
    {
        $order_status = DB::table('orders')->where('order_id', $id)->value('order_status');
        
        //echo $order_status;
        
        if($order_status == 1)
        {
            return view('OrderTracker.preparing');
        }

        if($order_status == 2)
        {
            return view('OrderTracker.readyForDelivery');
        }

        if($order_status == 3)
        {
            return view('OrderTracker.outForDelivery');
        }

        if($order_status == 4)
        {
            return view('OrderTracker.delivered');
        }
        

        return view('OrderTracker.orderTracking');
    }

   // public function orderTracking()
    //{
      //  return view('OrderTracker.orderTracking');
    //}
}
