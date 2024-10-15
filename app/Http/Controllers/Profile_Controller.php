<?php

namespace App\Http\Controllers;

use App\Models\BoughtProducts;
use App\Models\CancelledProducts;
use App\Models\RefundedProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile_Controller extends Controller
{
    public function New_Address_Route(){
        return view('Profile.Add_New_Address');
    }
    public function New_Card_Route(){
        return view('Profile.Add_New_Card');
    }
    public function New_Password_Route(){
        return view('Profile.Change_Password');
    }
    public function New_PhoneNumber_Route(){
        return view('Profile.Change_Phone_Number');
    }
    public function New_Email_Route(){
        return view('Profile.Change_Email');
    }
    public function Address_Route(){
        return view('Profile.Address');
    }
    public function Profile_Route(){
        return view('Profile.User_Profile');
    }
    public function User_Address_Details_Route(){
        return view('Profile.User_Address_Details');
    }
    // public function My_Purchase_Route(){
    //     $bought = BoughtProducts::all()->where('user_id',Auth::user()->id);
    //     $refunded = RefundedProducts::all()->where('user_id',Auth::user()->id);
    //     $cancelled = CancelledProducts::all()->where('user_id',Auth::user()->id);
    //     return view('Profile.My_Purchase',compact('bought','refunded','cancelled'));
    // }
    // public function bought(){
    //     $bought = BoughtProducts::all()->where('user_id',Auth::user()->id);
    //     return view('Profile.My_Purchase',compact('bought'));
    // }

    public function Pass_Verification_Route(){
        return view('Profile.Change_Password_Verification');
    }

    // public function BankandCard_Route(){
    //     return view('Profile.BankandCard');
    // }
     
}
