<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;  
use App\order; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('HomeViews.home');
    }

    public function clearCart(Request $request)
    {
         if($request->session()->has('cart'))
        {
            $request->session()->forget('cart');
        }

        $menu = menu::all(); 

        return redirect('/home');
    }
}
