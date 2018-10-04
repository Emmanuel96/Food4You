<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;  
use App\Notifications\OrderConfirmed; 
use App\Notifications\TacoVanIsAround; 
use Illuminate\Notifications\Notification;
use App\notificationTest; 

class TextMessagingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('HomeViews.home');
    }

    public function SendMessages()
    {
       $notificationTest = notificationTest::all(); 

       foreach($notificationTest as $user)
       {
            $user->notify(new TacoVanIsAround($user->buyer_name));
            echo 'Sent to '. $user->buyer_name. "\n";
       }
    }
}
