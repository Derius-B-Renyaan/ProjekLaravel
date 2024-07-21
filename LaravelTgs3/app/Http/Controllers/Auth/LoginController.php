<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'passsword');

        if(Auth::attempt($credentials)){
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'The rpovided credentials do not match our records.',
        ]);
    }
}
