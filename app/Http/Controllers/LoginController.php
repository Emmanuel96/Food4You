<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate()
    {
        if (Auth::attempt(['user_email' => $email, 'password' => $password])) {
            // Authentication passed...
            
            return redirect()->intended('menu');
        }
    }
}
