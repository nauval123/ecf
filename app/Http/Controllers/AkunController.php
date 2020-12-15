<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AkunController extends Controller
{
//    public function index(){
//        return view('series/login');
//    }

    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'id' => 'required',
                'name' => 'required',
                'email' => 'required'
            ]);
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            if($user->admin == 1){
                return redirect()->route('profilAdmin')->with('message',"profil berhasil diubah!");
            }elseif($user->admin == 0){
                return redirect()->route('profilFarmer')->with('message','profil berhasil diubah');
            }

        } catch (ValidationException $e) {
            if($user->admin == 1){
                return redirect()->route('profilAdmin')->with('message',"profil gagal diubah!");
            }elseif($user->admin == 0){
                return redirect()->route('profilFarmer')->with('message','profil gagal diubah');
            }
        }catch (QueryException $e){
            if($user->admin == 1){
                return redirect()->route('profilAdmin')->with('message',"email sudah dipakai");
            }elseif($user->admin == 0){
                return redirect()->route('profilFarmer')->with('message','email sudah dipakai');
            }
        }
    }

//    public function login(Request $request){
////      $data = User::where('email',$request->email)->first();
////      if($data){
////          if(Hash::check($request->password,$data->password)){
////              session(['berhasil_login'=>true]);
////            return redirect()->route('homepageAdmin');
////          }
////      }
////        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
////            return redirect()->route('homepageAdmin');
////        }
////      return redirect(route('loginpage'))->with('message','login gagal');
//    }
//
//    public function logout(Request $request){
//        $request->session()->flush();
//        Auth::logout();
//        return redirect()->route('login');
//    }

}
