<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use sessions; 
use App\Restaurants; 
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    //protected $redirectTo = '/restaurants';

    public function redirectTo() {


        $role = Auth::user()->user_role;
        //dd($role);


        switch($role) {
            case 1:
            //get the restaurant from the user 
                $restaurant = Restaurants::where('user_id', '=', Auth::user()->id)->first(); 
                session(['logged_in_restaurant'=> $restaurant]);
                return 'admin/restaurants';
            break;

            case 2: 
                return '/restaurants';
            break;

            case 3:
                $restaurant = Restaurants::where('user_id', '=', Auth::user()->id)->first(); 
                session(['logged_in_restaurant'=> $restaurant]);
                return '/admin/viewProducts';
            break;

            default:
                return '/home';
            break;
        }
    }

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
