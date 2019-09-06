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
use App\Events\orderNotification;
use DB;
use App\Notifications\OrderConfirmed;
use App\Notifications\newOrderReceived;
use Notification;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Stripe\Stripe;
use Illuminate\Support\Facades\Mail;
use Paystack;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function displayCheckout(){
        $delivery_price = 1000;
        if(Session::has('delivery_price')){
            $delivery_price = Session::get('delivery_price');
        }else{
            $delivery_price = 1000;
        }

        // return Session::get('cart');
        if(Session::get('cart') == "")
        {
            //if no cart, return back to menu view
            return redirect(url()->previous());
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        //we need the days for delivery for that particular customer
        //$days_of_delivery = daysofdelivery::all();
        $days_of_delivery = DB::select('select * from days_of_delivery where restaurant_id = 0');

        $restaurants = DB::table('restaurants')->where('restaurant_id', '$id')->first();
       // return $restaurants;

        return view('checkOutViews.checkout', ['delivery_price'=> $delivery_price,'products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'days'=> $days_of_delivery,
        'restaurants' => $restaurants ]);
    }

    public function createOrder(Request $request)
    {
        if(Session::has('delivery_price')){
            $delivery_price = Session::get('delivery_price');
        }else{
            $delivery_price = 1000;
        }
        if(!Session::has('cart'))
        {
        	return redirect()->route('cart.show');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //so for now you can only get the orders from one restaurant at a time
        //store the restaurant ID
        // $user = Auth::user();

        $restaurant_id = Session::get('current_restaurant_id');
        // $restaurant_id = session::get(current_restaurant_id);

        //get the actual day from the db
        $day =  DB::table('days_of_delivery')->where('id', $request->day)->pluck('days');

        //Create order
        $orders = order::create(
            [
                 //STORE ORDER PRICE
                'buyer_name' => $request->name,
                //I NEED TO FIND A PROPER WAY TO FIND THE RESTAURANT ID
                'buyer_email' => $request->email,
                'order_price' => $cart->totalPrice + $delivery_price,
                'buyer_phone_number' => $request->phone,
                'buyer_address' => $request->address,
                'order_slug' => substr( "abcdefghijklmnopqrstuvwxyz" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'payment_ref' => substr( "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890" ,mt_rand( 0 ,5 ) ,1 ) .substr( md5( time( ) ) ,1 ),
                'order_status' => '-1',
                'restaurant_id' => $restaurant_id,
                'batch' => $request->batch,
                'day' => $day,
                'image' => 'ass.jpg'
            ]);

        // return $orders;
            $order_slug = $orders->order_slug;
            Session::put('order_slug', $order_slug);


                    //dd($orders);die;

            //once we create the order, we update the amount in the current number of order
            $current_no_of_delivery =  DB::table('days_of_delivery')->where('id', $request->day)->pluck('current_no_of_delivery');;
            $c_no_of_del = $current_no_of_delivery[0] + 1;

            // return $c_no_of_del;

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
        //return 'screw';
        // echo $paymentDetails['status'];

        // dd($paymentDetails);


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want#


        // $message = "dlfjdlfjkdf";
        // $data = ["sdkflsjadkfsdlfsdllfjsdflksdkfdslsfjdsfldlfkjdsljfldslfkds"];

        ///NOTIFICATIONS FOR ORDER
        $order_slug = $request->session()->get('order_slug');
        $order_slug = $request->session()->pull('buyer_email');


        //send email of confirmation to the user
       // Mail::to('emmanuelaudu@aun.com.ng')->send(new OrderConfirmation());

        // echo session::get('order_slug');
        //get
        //get order with this order slug

        $orders = order::where('order_slug','=', session::get('order_slug'))->first();


        // //text message to I, Emmanuel, the admin
        // Notification::route('nexmo', '+2347037699184')
        //   ->notify(new newOrderReceived($orders->buyer_phone_number, $orders->buyer_user_name));

        // //text message to our beloved Restaurant
        // $restaurant = Restaurants::find($orders->restaurant_id);
        // $restaurant_phone_number =  $restaurant->restaurant_phone_number;
        // Notification::route('nexmo', $restaurant_phone_number)
        //     ->notify(new newOrderReceived($orders->buyer_phone_number, $orders->buyer_name));

        // //send text message to my beloved users
        // $buyer_phone_number = $orders->buyer_phone_number;
        // $buyer_phone_number = "+234".substr($buyer_phone_number,1, 10);

        // Notification::route('nexmo', $buyer_phone_number)
        //     ->notify(new OrderConfirmed($orders->payment_ref, $orders->order_id));

        //send text message to user confirming order
        // $orders->notify(new OrderConfirmed($orders->payment_ref));
        //if payment was successful then order status = 1
        if($paymentDetails['status'] ==1)
        {
            $orders->order_status = 1;
            $orders->delivery_status = 1;
        //    event(new orderNotification(Auth::user()->user_name));
        }
        else
        {
            $orders->order_status = -1;
        }

        $orders->save();



        //else order status = -1

        //SEND A TEXT MESSAGE TO ME WHEN IT'S READY
        $user = User::where('email','admin@gmail.com')->first();

        //  if(!Session::has('cart'))
        // {
        // 	return redirect()->route('cart.show');
        // }

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

        return redirect()->route('order.tracking', ['id' =>$orders]  );

        //---- REDIRECT TO RESTAURANT PAGE FOR NOW -- //
        // Session::flash('success', 'Your order was successful');
        // return redirect()->route('restaurants.show');

        //-- UNCOMMENT IN THE CASE OF MAKING CHANGES TO THE ORDER TRACKING PAGE
    }

    public function orderTracking($id)
    {
        $order = order::find($id);

        //if the order exists
        if($order != null )
        {
            $order_status = $order->order_status;

            $order_delivery_status = $order->delivery_status;

            if( $order_status > 0 && $order_delivery_status >= 0)
            {
                //the 4 different states of an order
                if($order_delivery_status == 1)
                {
                    return view('OrderTracker.preparing');
                }

                if($order_delivery_status == 2)
                {
                    return view('OrderTracker.readyForDelivery');
                }

                if($order_delivery_status == 3)
                {
                    return view('OrderTracker.outForDelivery');
                }

                if($order_delivery_status == 4)
                {
                    return view('OrderTracker.delivered');
                }
            }
        }

        return Redirect::back();
        return view('HomeViews.home');
    }

    public function orderTracking2()
    {
        return view('OrderTracker.orderTracking2');
    }

    public function mailTest()
    {
        return 'i got here';
        Mail::to('emmanuel.audu1@aun.edu.ng')
        ->send(new OrderConfirmation());
        return 'done';
    }

    public function min_order_check(Request $request)
    {
        if(Session::has('current_restaurant_id'))
        {
            $restaurant_min_order = Restaurants::find(Session::get('current_restaurant_id'))->restaurant_minimum_order;
            if(Session::has('cart'))
            {
                $cart = Session::get('cart');

                if($restaurant_min_order > $cart->totalPrice)
                {
                    //return 1 that the checkout button shousld still be stable
                    echo 1;
                    return 1;
                }
            }
        }


    }
}
