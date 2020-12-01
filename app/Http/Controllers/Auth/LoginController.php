<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

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
        }
    }


}
