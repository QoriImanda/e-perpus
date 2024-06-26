<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function doRegister(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'nik' => 'required|unique:users,nik',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
        ]);

        $makeAccount = User::MakeAccount($validated);
        if($makeAccount->getData()->status == 200){
            return redirect()->route('login')->with('success', $makeAccount->getData()->message);
        }else{
            return back()->with('err', $makeAccount->getData()->message);
        }
    }

    public function doLogin(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin_check = User::AdminCheckWhenLogin($validated);
        $credentials = $request->only('username', 'password');
        $check_user = User::where('username', $request->username)->first();
        if($admin_check == true){
            if(Auth::attempt($credentials)){
                $request->session()->put('user_login', $check_user->nik);
                return redirect()->route('dashboard');
            }else{
                return back()->with('err', 'Username atau Password Salah');
            }
        }else{
            if(Auth::attempt($credentials)){
                $request->session()->put('user_login', $check_user->nik);
                return redirect()->route('dashboard');
            }else{
                return back()->with('err', 'Username atau Password Salah');
            }
        }
    }

    public function doLogout(Request $request){

        Auth::logout();
        $request->session()->forget('user_login');
        return redirect('/login')->with('success', 'Silahkan Login Kembali');
    }
}
