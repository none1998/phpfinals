<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function register(){
        return view('user.register');
    }

    public function store(Request $request){
        $result=DB::insert("insert into users(name, email, password) value(?,?,?)",[$request->input('name'),$request->input('email'),Hash::make($request->input('password'))]);
        echo $result;
    }
}
