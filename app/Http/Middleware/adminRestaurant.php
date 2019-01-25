<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminRestaurant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         //get the auth user 
         $user = Auth::user(); 
         //check if the authenticated user is an admin 
         if(!$user || $user->user_role == 2 || $user->user_role == 3)
         {
             return redirect('/admin/viewProducts');
         }
         if(Auth::user()->user_role == 1)
         {
             //if authenticated user is an admin then redirect back to the home page 
             return $next($request);
         }
    }
}
