<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;  
use App\order; 
use App\States; 
use App\area;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
            //$this->middleware('auth');
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = states::all(); 
        $areas = area::where('state_id', '=', 1)->get(); 
        return view('HomeViews.home',['states'=> $states, 'areas' => $areas]);
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
