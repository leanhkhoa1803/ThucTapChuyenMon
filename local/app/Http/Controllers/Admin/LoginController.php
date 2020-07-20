<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Socialite;
class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if($request->remember='Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($arr,$remember)){
            return redirect()->intended('admin/home');
        }else{
             return redirect()->back()->withInput()->with('erorr','Tài khoản hoặc mật khẩu không đúng');
        }
    }
    public function redirectToProvider()
    {
    return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect()->to('/');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
            
        }
        return redirect()->to('admin/product');
    }
}