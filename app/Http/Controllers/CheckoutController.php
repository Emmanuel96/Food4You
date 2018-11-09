<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session; 
use App\Cart; 
use App\User; 
use App\Restaurants; 
use App\order; 
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
        return view('checkOutViews.checkout',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function createOrder(Request $request)
    {
        if(!Session::has('cart'))
        {
        	return redirect()->route('cart.show');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //Create order
        $orders = order::create(
            [
                 //STORE ORDER PRICE
                'buyer_name' => $request->name, 
                //I NEED TO FIND A PROPER WAY TO FIND THE RESTAURANT ID 
                'buyer_phone_number' => $request->phone, 
                'buyer_address' => $request->address, 
                'order_slug' => substr( "abcdefghijklmnopqrstuvwxyz" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'payment_ref' => substr( "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'image' => 'ass.jpg'
            ]);

        //find the order from the order table 
        $orders = order::where('order_slug','=', $orders->order_slug)->first(); 

        //store all the products in the order in the order products table
        //firstly get all the products fromt the cart
        $cart =  Session::has('cart')? Session::get('cart'):null;

        //if a cart exists 
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


    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want#

        
        // $message = "dlfjdlfjkdf";
        // $data = ["sdkflsjadkfsdlfsdllfjsdflksdkfdslsfjdsfldlfkjdsljfldslfkds"]; 

        ///NOTIFICATIONS FOR ORDER

        //send email of confirmation to the user 
       // Mail::to('emmanuel.audu1@aun.edu.ng')->send(new OrderConfirmation()); 

        //send text message to user confirming order 
        $orders->notify(new OrderConfirmed($orders->payment_ref));


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
      
        return redirect()->route('restaurants.show')->with('success', 'successfully purchased products');
    }
}
