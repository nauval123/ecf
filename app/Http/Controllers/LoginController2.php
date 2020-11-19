<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController2 extends Controller
{
    public function index(){
        return view('series.login');
    }

    public function login(Request $request){
//        dd($request->all());
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
           $user =user::where('email',$request->email)->first();
            if($user->is_admin()){
                return redirect()->route('Admin');
            }
            return redirect()->route('Farmer');
        }
        return redirect()->back();
    }
}
