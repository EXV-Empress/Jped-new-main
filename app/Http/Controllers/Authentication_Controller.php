<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authentication_Controller extends Controller
{
    public function Login_Authentication(){
        return view('DashBoard');
    }

    public function Sign_Up_Authentication(){
        return view('DashBoard');
    }
}
