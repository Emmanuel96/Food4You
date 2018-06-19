<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = Auth::user(); 
        if (Auth::guard($guard)->check()) {
            //check if the user is an admin
            //if admin go back to dashboard
            if($user->user_role != 1)
            {
                return redirect('/restaurants');
            }
            return redirect('/admin/viewProducts');
        }

        return $next($request);
    }
}
