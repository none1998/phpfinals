<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function postLogin(Request $request){
        $credentials = $request->except(('_token'));

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        } else {
            abort(403);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
