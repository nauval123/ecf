<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('series/login');
    }

    public function login(Request $request){
//      $data = User::where('email',$request->email)->first();
//      if($data){
//          if(Hash::check($request->password,$data->password)){
//              session(['berhasil_login'=>true]);
//            return redirect()->route('homepageAdmin');
//          }
//      }
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
//            return redirect()->route('homepageAdmin');
//        }
//      return redirect(route('loginpage'))->with('message','login gagal');
    }

    public function logout(Request $request){
//        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

}