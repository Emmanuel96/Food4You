<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
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
        if(!$user || $user->user_role == 2)
        {
            return redirect('/restaurants');
        }
        if(Auth::user()->user_role == 1 || Auth::user()->user_role == 3)
        {
            //if authenticated user is an admin then redirect back to the home page 
            return $next($request);
        }
    }
}
