<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('Login');
    }
    public function signup(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('Signup');
    }

    public function Loginpost(Request $request){
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('Login'))->with('error', 'email or password invalid');
    }

    public function Signuppost(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirmPassword|min:8',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('Signup'))->with('error', 'Sign up failed, please try again');
        }
        return redirect(route('Login'))->with('success', 'Registration successful');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('Login'));
    }
    public function Profile_Route(){
        return view('Profile.User_Profile');
    }
    public function edit(){
        return view('Profile.User_Edit')->with('user', auth()->user());
    }

    public function update(Request $request){
        $user = auth()->user();

        $user ->update([
            'name'=> $request->name,
            'email'=> $request->email,
        ]);

        return view('Profile.User_Profile');;
    }
}
